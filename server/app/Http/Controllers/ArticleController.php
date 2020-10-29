<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // indexページへ移動
    public function index()
    {
        // モデル名::テーブル全件取得
        $articles = Article::all();
        // articlesティレクトリーの中のindexページを指定し、itemsの連想配列を代入
        return view('articles.index', ['articles' => $articles]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $article = new Article;

        // 値の用意
        $article->id = $request->id;
        $article->title = $request->title;
        $article->body = $request->body;

        $article->timestamps = false;

        // インスタンスに値を設定して保存
        $article->save();

        // 登録したらindexに戻る
        return redirect('/articles');
    }

    //// showページへ移動
    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show', ['article' => $article]);
    }

    public function edit($id)
    {
        $article = Article::find($id);
        return view('articles.edit', ['article' => $article]);
    }
    public function update(Request $request, $id)
    {
        // ここはidで探して持ってくる以外はstoreと同じ
        $article = Article::find($id);

        // 値の用意
        $article->title = $request->title;
        $article->body = $request->body;
        $article->timestamps = false;

        // 保存
        $article->save();

        // 登録したらindexに戻る
        return redirect('/articles');
    }
    
     public function destroy($id)
     {
         $article = Article::find($id);
         $article->delete();
         return redirect('/articles');
     }
}
