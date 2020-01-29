<?php namespace App\Http\Controllers;

use App\Coding\Functions;
use Faker\Provider\File;
use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Symfony\Component\HttpFoundation\Response;


class MyController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function get()      //back end
    {
        $page = new Functions();
        for ($i=2;$i>=1;$i--) {
            if ($i==1) {
                $url = 'http://www.copyrightfreecontent.com/';
            }
            else
                $url = 'http://www.copyrightfreecontent.com/page/'.$i.'/';

            $page->getcontent($url);                // tomorrow's task, make it generate web pages with data from database

        }
    }

    function page($postid)
    {
        $dat = new Functions();
        $data = $dat->dataforarticle($postid);
        $popular = $dat->popular();
        return view('article')->with($data)->with('popular', $popular);
    }

    function main()
    {   $dat = new Functions();
        $data = $dat->dataforcontent();
        $popular = $dat->popular();
        return view('index')->with('data',$data)->with('popular',$popular);
    }

    function getCategory($category)
    {
        $dat = new Functions();
        $data = $dat->dataforcategory($category);
        $popular = $dat->popular();
        return view('category')->with('data',$data)->with('popular',$popular);
    }
    function testingjson(\Illuminate\Http\Request $request){
        if ($request->isMethod('post')){
            $data = response()->json(['response' => 'This is post method']);
        }
else
        $data = response()->json(['response' => 'This is get method']);
        $data->header('Access-Control-Allow-Origin', 'http://localhost:5555') ;
        return $data;
    }

}