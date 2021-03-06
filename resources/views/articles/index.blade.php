<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>論文一覧</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>論文一覧</h1>
    <ul>
        @foreach ($articles as $article)
        <p><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></p>
        @endforeach
        <a href="/articles/create"><input type="submit" value="新規論文投稿"></a>
    </ul>
</body>
</html>