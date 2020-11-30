<?php

namespace App\Http\Controllers;

use Storage;
use App\Models\Article;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;
use App\Http\Requests\ArticlesRequest;

class ArticleController extends Controller
{
	public function index(){
        $Articles = QueryBuilder::for(Article::class)
        ->allowedFilters([
            AllowedFilter::scope('title'),
        ])
        ->defaultSort('created_at','id')
        ->paginate();
    	return view('articles.index',compact('Articles'));
	}

    public function show(Request $request , Article $article){
    	return view('articles.show',compact('article'));
    }

    public function download(Article $article){
        return Storage::disk('public')->download($article->file,$article->title);
    }

    public function store(ArticlesRequest $request){
        $data = [
            'author' => $request->author,
            'image' => $request->file('image')->store('/','public'),
            'file' => $request->file('file')->store('/','public'),
            'es' => ['text' => $request->text['es'] , 'title' => $request->title['es']],
        ];
        foreach (['de','it','en','fr'] as $value) {
            if( strlen($request->title[$value]) >= 3 && strlen($request->text[$value]) >= 3 ){
                $data[$value] = ['text' => $request->text[$value] , 'title' => $request->title[$value]];
            }
        }
        Article::create($data);
        return redirect('/admin');
    }

    public function destroy(Article $article){
        Storage::disk('public')->delete($slider->image);
        Storage::disk('public')->delete($slider->file);
    	$article->delete();
    }
}
