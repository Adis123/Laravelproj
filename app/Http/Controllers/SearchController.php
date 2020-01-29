<?php

namespace App\Http\Controllers;

use App\Coding\Functions;
use Illuminate\Http\Request;
use App\Content;

class SearchController extends Controller
{
    //
function index(Request $request)
{
   $pop = new Functions();
    new Content();
    $search = $request->search;
    $popular = $pop->popular();
    $data = Content::where('title','like','%'.$search.'%')->paginate(5);
    $data->setPath('/search?search='.$search);
    for ($i=0;$i<count($data);$i++) {
        $data[$i]->shorttext = str_limit($data[$i]->shorttext, 270);
    }
    return view('search',['search'=> $data, 'popular' => $popular]);

}
}
