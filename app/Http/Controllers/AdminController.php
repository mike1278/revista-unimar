<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class AdminController extends Controller
{
    public function index(){
    	$articles = Article::orderBy('id')->paginate();
    	return view('Admin.index',compact('articles'));
    }
}
