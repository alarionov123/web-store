CREATE DATABASE IF NOT EXISTS larionov_db;

USE larionov_db;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    image_path varchar(255)
);

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image_path`)
VALUES
    ('1', 'Organic Cotton T-shirt', 'Soft and breathable, this organic cotton t-shirt is perfect for everyday wear.', '25', 'images/tshirt1.png'),
    ('2', 'Bluetooth Wireless Headphones', 'Immerse yourself in your favorite tunes with these high-quality wireless headphones.', '80', 'images/61-g7m+90eL.jpeg'),
    ('3', 'Stainless Steel Water Bottle', 'Stay hydrated on the go with this durable and sleek stainless steel water bottle.', '20', 'images/images.jpeg'),
    ('4', 'Wireless Charging Pad', 'Charge your devices effortlessly with this stylish wireless charging pad.', '40', 'images/51YD0CM1PnL.jpg'),
    ('5', 'Adjustable Desk Lamp', 'Illuminate your workspace with this adjustable LED desk lamp, featuring multiple brightness levels.', '35', 'images/images1.jpeg')
