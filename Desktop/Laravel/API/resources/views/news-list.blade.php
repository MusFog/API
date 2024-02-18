<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Список новин за категорією</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<h1>Новини за категорією</h1>
<ul id="news-list"></ul>
<nav id="pagination"></nav>

<script>
    $(document).ready(function() {
        var categoryId = {{ $categoryId }};
        Newslist('/api/categories/' + categoryId + '/news');
        function Newslist(pageUrl) {
            $.get(pageUrl, function(response) {
                $('#news-list').empty();
                response.data.forEach(function(news) {
                    var listItem = '<li>' +
                        '<h2>' + news.title + '</h2>' +
                        '<img src="' + news.image + '" style="width:500px;height:auto;">' +
                        '<p>Дата: ' + news.created_at + '</p>' +
                        '<p>Опис: ' + news.description + '</p>' +
                        '<p>Лайків: ' + news.likes_count + '</p>' +
                        '</li>';
                    $('#news-list').append(listItem);
                });

                $('#pagination').empty();
                response.meta.links.forEach(function(link) {
                    var linkItem = $('<a>', {
                        text: link.label,
                        click: function(list) {
                            list.preventDefault();
                            Newslist(link.url);
                        }
                    })
                    $('#pagination').append(linkItem);
                });
            });
        }
    });
</script>
</body>
</html>
