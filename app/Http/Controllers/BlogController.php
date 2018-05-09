<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;
use Carbon\Carbon;

class BlogController extends Controller
{
    //

    public function __construct(){
        $this->middleware('auth')->except(['index','post','about','contact']);
    }

    public function index(){


        // $blogs = Blog::latest()
        // ->filter(request(['month','year']))
        // ->get();


        $blogs = Blog::latest();

        if($month = request('month')){
            $blogs->whereMonth('created_at', Carbon::parse($month)->month);
        }


        if($year = request('year')){
            $blogs->whereYear('created_at', Carbon::parse($year)->year);
        }

        $blogs = $blogs->get();


        


        
        

    	return view('pages.index', compact('blogs'));
    }

    public function about(){
    	return view('pages/about');
    }

    public function post(){
        $id = Request('id');
        $blog = Blog::find($id);
    	return view('pages/post',compact('blog'));
    }

    public function contact(){
    	return view('pages/contact');
    }

    public function create(){
        return view('pages/create');
    }

    public function store(){

        $this->validate(request(),[
            'title' => 'required',
            'body' => 'required'
        ]);

        $blog = new blog;
        $blog->title = Request('title');
        $blog->body = Request('body');
        $blog->user_id = auth()->id();
        $blog->save();
        return redirect('/');

        // dd(request()->all());

            // Blog::create(request(['title','body']));

    }
}
