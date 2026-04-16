# Secure Website Code Implementation

##  Overview
This project demonstrates secure web development practices by building a login system using HTML, JavaScript, PHP, and MySQL. The application focuses on protecting user data and preventing common web vulnerabilities such as SQL injection and cross-site scripting (XSS).

---

##  Technologies Used
- HTML (Frontend structure)
- JavaScript (Client-side validation)
- PHP (Server-side processing)
- MySQL (Database)
- XAMPP (Local server environment)

---

##  Project Structure
secure_app/
│── index.html # Login form (Frontend)
│── login.php # Backend processing


---

##  Setup Instructions

### 1. Install XAMPP
Download and install XAMPP, then start:
- Apache
- MySQL

---

### 2. Project Setup
1. Navigate to the XAMPP directory:
   /Applications/XAMPP/htdocs/
2. Create a folder:
   secure_app
3. Place the following files inside:
- index.html
- login.php

---

### 3. Database Setup
1. Open browser: http://localhost/phpmyadmin
2. Create database: secure_app
3. 3. Run SQL:

```sql
CREATE TABLE users (
 id INT AUTO_INCREMENT PRIMARY KEY,
 username VARCHAR(50) NOT NULL UNIQUE,
 password VARCHAR(255) NOT NULL
);

INSERT INTO users (username, password)
VALUES ('admin', SHA2('admin123', 256));
```
### 4. Configure Database Connection

Update login.php: $conn = new mysqli("localhost", "root", "", "secure_app", 3307);
### 5. Run the Application

Open browser:

http://localhost:8080/secure_app/index.html
