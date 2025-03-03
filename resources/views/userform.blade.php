<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма пользователя</title>
</head>
<body>
    <h1>Заполните форму</h1>
    <form action="/store_form" method="POST">
        @csrf
        <label for="first_name">Имя:</label>
        <input type="text" id="first_name" name="first_name" required><br><br>

        <label for="last_name">Фамилия:</label>
        <input type="text" id="last_name" name="last_name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <button type="submit">Отправить</button>
    </form>
</body>
</html>
