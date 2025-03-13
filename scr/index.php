<?php
$servername = "db";
$username = "user";
$password = "userpassword";
$dbname = "mydatabase";

// Создаем соединение
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверяем соединение
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL запрос для выборки данных
$sql = "SELECT id, name FROM my_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Вывод данных в виде таблицы
    echo "<table border='1'><tr><th>ID</th><th>Name</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
