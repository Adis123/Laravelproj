<?php
/**
 * Created by PhpStorm.
 * User: adomas
 * Date: 17.3.7
 * Time: 11.49
 */

namespace App\Coding;

use App\Content;
use Goutte\Client;
use Illuminate\Support\Facades\DB;
use Symfony\Component\DomCrawler\Crawler;


class Functions
{
    function getcontent($url)
    {
        $filter = '#content > div';
        $content = new Client();
        $crawler = $content->request('GET', $url);
        $filtered = $crawler->filter($filter)->eq(10)->previousAll();
        $filtered->each(function(Crawler $node, $i) {
            if ($i <= 9) {
                $title = $node->filter('h1')->text();
                $check = $node->filter('img')->count();
                if ($check == 0){
                    $img = '';
                }
                else
                {
                    $img = $node->filter('img')->attr('src');
                }
                if (strlen($img)>300)
                {
                    $img = '';
                }
                $text = $node->filter('.entry')->text();
                $text = explode('Tweet', $text);
                $text = $text[0];
                $id = $node->filter('div')->attr('class');
                if(!str_contains($id,'category-'))
                {
                    $category = '';
                }
                else{
                $category = explode('category-',$id);
               $category = $category[1];}
                $id = explode('post type-post', $id);
                $id = substr($id[0], 5, 5);
                $article = new Content();
                $result = Content::where('id', '=', $id)->get();
                $result2 = Content::where('shorttext', '=', $text)->get();
                if (count($result) == 0 || count($result2) == 0) {
                    $article->category = $category;
                    $article->id = $id;
                    $article->title = $title;
                    $article->imagelink = $img;
                    $article->shorttext = $text;
                    $article->save();
                }
                sleep(1);           //saves 10 articles to db from last to first
            }
        });

    }

    // end back end

    function dataforcontent()
    {
        new Content();
        $data = Content::take(10)->OrderBy('created_at', 'desc')->get();
        for ($i=0;$i<count($data);$i++) {
            $title = $data[$i]->title;
            $imagelink = $data[$i]->imagelink;
            $shorttext = $data[$i]->shorttext;
            $shorttext = str_limit($shorttext,270);
            $id = $data[$i]->id;
            $data[$i] = array(
                'title' =>$title,
                'imagelink' =>$imagelink,
                'shorttext' => $shorttext,
                'id' => $id
            );
        }
        return $data;               //takes 10 newest articles from db.


    }
    function dataforarticle($postid)
    {
        new Content();
        $data = Content::where('id', '=', $postid)->first();
        $title = $data->title;
        $imagelink = $data->imagelink;
        $text = $data->shorttext;
        $data = array(
            'title' => $title,
            'imagelink' => $imagelink,
            'shorttext' => $text

        );
        return $data;           //takes article from db by post number


    }
    function popular()
    {
        new Content();
        $data = Content::take(8)->inRandomOrder()->get();
        for ($i=0;$i<count($data);$i++) {
            $title = $data[$i]->title;
            $shorttext = $data[$i]->shorttext;
            $shorttext = str_limit($shorttext,100);
            $id = $data[$i]->id;
            $data[$i] = array(
                'title' =>$title,
                'shorttext' => $shorttext,
                'id' => $id
            );
        }

        return $data;
    }
    function dataforcategory($category)
    {
        new Content();
        $data = Content::where('category', '=', $category)->OrderBy('created_at', 'desc')->paginate(5);

        for ($i=0;$i<count($data);$i++) {
            $title = $data[$i]->title;
            $imagelink = $data[$i]->imagelink;
            $shorttext = $data[$i]->shorttext;
            $shorttext = str_limit($shorttext,270);
            $id = $data[$i]->id;
            $data[$i] = array(
                'title' =>$title,
                'imagelink' =>$imagelink,
                'shorttext' => $shorttext,
                'id' => $id
            );
        }
        return $data;               //takes 10 newest articles from db.


    }




}