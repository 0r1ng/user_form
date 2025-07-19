# User Form Web App

This is a simple PHP-based web application that allows users to submit their name and age through a form. Submitted data is stored in a MySQL database and displayed in a table with a status toggle feature.

## 🔧 Features

- Submit name and age via HTML form
- Store data in MySQL using PHP (MySQLi)
- Display all users in a table
- Toggle user status between Active and Inactive using AJAX

## 🛠 Technologies Used

- HTML/CSS
- JavaScript (Fetch API)
- PHP
- MySQL
- XAMPP (Apache + MySQL server)

## 📦 Installation (Local)

1. Clone or download the repository
2. Place it in your `C:/xampp/htdocs/` folder
3. Start **Apache** and **MySQL** via XAMPP
4. Create the database using this SQL:
   ```sql
   CREATE DATABASE user_data;
   USE user_data;
   CREATE TABLE users (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(100) NOT NULL,
       age INT NOT NULL,
       status TINYINT(1) DEFAULT 0
   );
