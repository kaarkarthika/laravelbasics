<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\DB;

class InsertController extends Controller
{
    public function insertform(){
      return view('add_post');
    }
   public function insert(Request $request) {
        $title = $request->input('title');
        $body = $request->input('body');
        $data=array('title'=>$title,"body"=>$body);
        DB::table('posts')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
   }
   public function getPostById($id)
   {
    $post = DB::table('posts')->where('id',$id)->first();
    return view('single-post',compact('post'));
   }
   public function deletePost($id)
   {
    DB::table('posts')->where('id',$id)->delete();
    return back()->with('post_deleted','Post has been deleted successfully!');
   }
   public function editPost($id)
   {
    $post = DB::table('posts')->where('id',$id)->first();
    return view('edit-post',compact('post'));
   }
   public function updatePost(Request $request)
   {
    DB::table('posts')->where('id',$request->id)->update([
      'title'=>$request->title,
      'body' =>$request->body
  ]);
  return back()->with('post_updated','Post has been updated successfully!');
   }
}
