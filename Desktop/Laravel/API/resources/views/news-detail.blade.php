<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Деталі новини</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<h1 id="news-title">Деталі новини</h1>
<img id="news-image" src="" alt="News Image" style="display:none;">
<div id="news-content"></div>
<p id="news-likes">Лайків: </p>

<script>
    $(document).ready(function() {
        var newsId = {{ $newsId }};
        $.get('/api/news/' + newsId, function(response) {
            var news = response.data;
            $('#news-title').text(news.title);
            $('#news-image').attr('src', news.image).show();
            $('#news-content').text(news.content);
            $('#news-likes').text('Лайків: ' + news.likes_count);
        })
    });
</script>
</body>
</html>
