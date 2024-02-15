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
<div id="pagination">
    <button id="prev">Попередня</button>
    <span id="page-info">Сторінка <span id="number-page"></span></span>
    <button id="next">Наступна</button>
</div>

<script>
    $(document).ready(function() {
        var categoryId = {{ $categoryId }};
        var numberPage = 1;

        function fetchNews(page) {
            $.get('/api/categories/' + categoryId + '/news?page=' + page, function(data) {
                $('#news-list').empty();
                data.data.forEach(function(news) {
                    var listItem = '<li>' +
                        '<h2>' + news.title + '</h2>' +
                        '<img src="' + news.image + '" style="width:500px;height:auto;">' +
                        '<p>Дата: ' + news.created_at + '</p>' +
                        '<p>Опис: ' + news.description + '</p>' +
                        '<p>Лайків: ' + news.likes_count + '</p>' +
                        '</li>';
                    $('#news-list').append(listItem);
                });
                $('#number-page').text(page);
            });
        }

        fetchNews(numberPage);

        $('#next').click(function() {
            numberPage++;
            fetchNews(numberPage);
        });

        $('#prev').click(function() {
            if (numberPage > 1) {
                numberPage--;
                fetchNews(numberPage);
            }
        });
    });
</script>
</body>
</html>
