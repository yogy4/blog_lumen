<?php 
namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
 class Postcontroller extends Controller {
     public function store(Request $request){
         $this->validate($request, [
             'title' => 'required',
             'body' => 'required'
         ]);
         return Post::create($request->all());
     }

     public function all(){
         return Post::all();
     }

     public function search(Request $name){
         $clue = $name->clue;
         $hsl = app('db')->select("SELECT * FROM posts WHERE title LIKE '%{$clue}%'");
         return $hsl;

     }
 }