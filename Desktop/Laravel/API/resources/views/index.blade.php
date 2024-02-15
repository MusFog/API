<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Список категорій</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<h1>Категорії</h1>
<ul id="categories-list"></ul>

<script>
    $(document).ready(function() {
        $.get('/api/categories', function(data) {
            data.forEach(function(category) {
                $('#categories-list').append('<li>' + category.name + '</li>');
            });
        });
    });
</script>
</body>
</html>
