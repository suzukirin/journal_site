<h1>論文一覧</h1>

    @foreach ($articles as $article)
        <!-- // リンク先をidで取得し名前で出力 -->
        <a href="/articles/{{ $article->id }}">{{ $article->title }}</a><br>
        <br>
    @endforeach


 <!-- 新規登録画面へジャンプする -->
<a href="/articles/create"><button>新規論文投稿</button></a>
