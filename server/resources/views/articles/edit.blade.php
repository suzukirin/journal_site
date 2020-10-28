 <form action="/articles/{{ $article->id }}" method="post">
     @csrf
     <!-- resourceの場合PUTを指定してあげないとエラーが起きる php artisan rote:listで確認② -->
     @method('PUT')
     <!-- idはそのまま -->
     <input type="hidden" name="id" value="{{ $article->id }}">

<h1>投稿論文編集</h1>


    @csrf
    <p>
        論文タイトル<br>
        <input type="text" name="title" value="{{ $article->title }}">
    </p>
    <p>
        本文<br>
        <textarea type="text" name="body" value="{{ $article->body }}"></textarea>
    </p>
   
    

    <input type="submit" value="更新" >
 </form>