<?php

namespace App\Http\Controllers;

use App\Models\CategoryBlog;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $categoryBlog;
    protected $post;

    public function __construct(CategoryBlog $categoryBlog, Post $post)
    {
        $this->categoryBlog = $categoryBlog;
        $this->post = $post;
    }

    public function blog(){
        $categoryBlogs = $this->getCategoryBlog();
        $newBlogs = $this->getNewBlog();
        $blogs = $this->post->where(['status' => 1])->get();
        return view('home.blog', compact('categoryBlogs', 'newBlogs', 'blogs'));
    }

    public function blogDetails(string $id){
        $categoryBlogs = $this->getCategoryBlog();
        $newBlogs = $this->getNewBlog();
        $post = $this->post->where('status', 1)->findOrFail($id);
        $content = strip_tags($post->content);
        $postMayLikes = $this->post->limit(3)->get();
        return view('home.blog-details', compact('post', 'content', 'categoryBlogs', 'newBlogs', 'postMayLikes'));
    }

    private function getCategoryBlog(){
        return $this->categoryBlog->where('status', 1)->get();
    }

    private function getNewBlog(){
        return $this->post->where(['status' => 1])->orderBy('created_at', 'desc')->limit(3)->get();
    }
}
