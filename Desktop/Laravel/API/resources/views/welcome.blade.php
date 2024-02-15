<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Перегляд новин та категорій</title>
</head>
<body>

<h1>Перегляд новин</h1>


<form action="{{ route('ToNewsByCategory') }}" method="POST">
    @csrf
    <label for="categoryId">Введіть ID категорії:</label>
    <input type="number" id="categoryId" name="categoryId" required>
    <button type="submit">Переглянути новини за категорією</button>
</form>
<form action="{{ route('NewsDetails') }}" method="POST">
    @csrf
    <label for="newsId">Введіть ID новини:</label>
    <input type="number" id="newsId" name="newsId" required>
    <button type="submit">Переглянути деталі новини</button>
</form>
<form action="{{ route('showCategories') }}" method="GET">
    @csrf
    <label for="newsId">Категорії:</label>
    <button type="submit">Переглянути всі категорії</button>
</form>



</body>
</html>


