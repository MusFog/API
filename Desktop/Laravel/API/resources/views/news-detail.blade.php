<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Деталі новини</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<h1>Деталі новини</h1>
<div id="news-details"></div>

<script>
    $(document).ready(function() {
        var newsId = {{ $newsId }};
        $.get('/api/news/' + newsId, function(news) {
            var content = '<h2>' + news.title + '</h2>'
                + '<img src="' + news.image + '" alt="News Image">'
                + '<p>' + news.content + '</p>'
                + '<p>Лайків: ' + news.likes_count + '</p>';
            $('#news-details').html(content);
        });
    });
</script>
</body>
</html>
