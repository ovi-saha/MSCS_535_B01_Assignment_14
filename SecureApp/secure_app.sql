CREATE DATABASE secure_app;

USE secure_app;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- Example user (password: admin123)
INSERT INTO users (username, password)
VALUES ('admin', SHA2('admin123', 256));