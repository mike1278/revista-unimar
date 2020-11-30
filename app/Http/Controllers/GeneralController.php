<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Article;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function home(){
        $Articles = Article::orderBy('created_at','desc')->orderBy('id')->paginate();
        $Sliders = Slider::orderBy('id')->get();
    	return view('General.Home',compact('Articles','Sliders'));
    }

    public function setlocale($locale){
        if (! in_array($locale, ['en', 'es', 'fr','it','de'])) {
            abort(400);
        }
        \App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }

}
