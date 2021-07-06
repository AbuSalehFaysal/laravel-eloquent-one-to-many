<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function addPost() {
        $post = new Post();
        $post->title = "Second Post Title";
        $post->body = "Second Post Body";
        $post->save();
        return "Post has been created successfully";
    }

    public function addComment($id){
        $post = Post::find($id);
        $comment = new Comment();
        $comment->comment = "This is first comment";
        $post->comments()->save($comment);
        return "comment has been posted";
    }

    public function getCommentByPost($id) {
        $comments = Post::find($id)->comments;
        return $comments;
    }
}
