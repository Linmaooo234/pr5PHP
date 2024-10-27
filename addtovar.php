<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Добавить товар</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Добавить товар</h1>
    <form action="insert.php" method="POST">
        <label for="name">Название:</label>
        <input type="text" name="name" required><br>

        <label for="description">Описание:</label>
        <textarea name="description" required></textarea><br>

        <label for="price">Цена:</label>
        <input type="number" name="price" step="0.01" required><br>

        <label for="category">Категория:</label>
        <select name="category">
            <option value="бытовая химия">Бытовая химия</option>
            <option value="косметика">Косметика</option>
            <option value="одежда">Одежда</option>
        </select><br>

        <input type="submit" value="Добавить товар">
    </form>
</body>
</html>