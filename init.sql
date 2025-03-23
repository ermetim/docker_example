-- Создаём таблицу "products", если она ещё не существует
CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY, -- Автоинкрементный первичный ключ
    name VARCHAR(255) NOT NULL, -- Название продукта (не может быть NULL)
    price DECIMAL(10,2) NOT NULL -- Цена продукта (не может быть NULL)
);

-- Заполняем таблицу начальными данными (три продукта)
INSERT INTO products (name, price) VALUES
('Laptop', 999.99), -- Ноутбук
('Smartphone', 599.49), -- Смартфон
('Headphones', 129.99); -- Наушники
