<?php
// Получаем переменные окружения для подключения к БД
$host = getenv('MYSQL_HOST');
$user = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');
$database = getenv('MYSQL_DATABASE');

// Подключаемся к базе данных
$conn = new mysqli($host, $user, $password, $database);

// Проверяем подключение
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Формируем SQL-запрос на получение всех записей из таблицы products
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

// Выводим заголовок страницы
echo "<h2>Product List</h2>";

// Начинаем формирование HTML-таблицы
echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Price ($)</th></tr>";

// Перебираем строки из результата запроса и добавляем их в таблицу
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['price']}</td></tr>";
}

// Закрываем таблицу
echo "</table>";

// Закрываем соединение с базой данных
$conn->close();
?>
