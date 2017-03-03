<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog',['blogs' => Blog::all()]);
    }

    public function create()
    {
        return view('new_blog');
    }

    public function add(Request $request)
    {
        Blog::create(['name'=>$request->input('name'), 'author'=>$request->input('author'), 'category'=>$request->input('category')]);
        return Redirect('/blog');
    }
    public function delete($id)
    {
        try
        {
            Blog::findOrFail($id)->forceDelete();
        }
        catch (\Exception $e)
        {
            dd("The blog you are trying to delete does not exist");
        }
        return Redirect('/blog');
    }
    public function getUpdate($id)
    {
        return view('update', ['blogup' => Blog::find($id)]);
    }
    public function update(Request $request)
    {
        $id = $request -> input('id');
        Blog::where('id', $id)->update(['name'=>$request->input('name'), 'author'=>$request->input('author'), 'category'=>$request->input('category')]);
        return Redirect('/blog');
    }
}