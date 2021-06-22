<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        $posts = DB::table("post")->get();

        return view("posts.index",compact("posts"));
    }

    public  function create(){
        return view("posts.create");
    }


    public function store(Request $request){

        $title = $request->get("title");
        $author_name = $request->get("author_name");
        $post_text = $request->get("post_text");


        DB::insert('insert into post(title,author_name,post_text) values(?,?,?)',
                    [$title,$author_name,$post_text]
        );

        return redirect()->back();
    }

