# Campus Navigation System (MAPS NIT Jalandhar)

An interactive navigation tool for **NIT Jalandhar**, designed to simplify campus exploration. The application allows students, faculty, and visitors to easily locate buildings, facilities, and key spots across the campus, showing the shortest path between locations.

## Features

- **Interactive Campus Map**: Built using Leaflet.js and OpenStreetMap.
- **Shortest Path Routing**: Employs the **A* Search Algorithm** to compute and draw the shortest path between campus locations on the fly.
- **User Authentication**: Simple Sign-Up and Login pages using MD5 password hashing.
- **Responsive Layout**: Dynamic desktop-friendly design with intuitive controls.

---

## Tech Stack

- **Frontend**: HTML5, Vanilla CSS, JavaScript (Leaflet.js library for maps)
- **Backend**: PHP (for user authentication and session management)
- **Database**: MySQL

---

## Installation & Local Setup

To run this application locally, you will need a local PHP server environment like **XAMPP**, **WampServer**, or **Laragon**.

### Step 1: Copy Project Files
Place the project directory inside your local server's root folder (e.g., `C:\xampp\htdocs\nitj_navigator\`).

### Step 2: Set Up Database
1. Open your database manager (such as [http://localhost/phpmyadmin](http://localhost/phpmyadmin)).
2. Create a new database named `user_db`.
3. In the **SQL** tab, run the following query to create the `users` table:

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);
```

### Step 3: Configure Database Connection
Edit the database configuration in `login.php` and `signup.php` to match your local database credentials:

```php
$servername = "localhost";
$username = "root"; 
$password = "your_mysql_password"; 
$dbname = "user_db";
```

### Step 4: Run the App
1. Make sure your local Web server (Apache) and Database server (MySQL) are running.
2. In your web browser, navigate to:
   ```
   http://localhost/nitj_navigator/index.html
   ```

---

## Project Structure

```
├── background.jpg      # Background image for the authentication pages
├── home.php            # Main campus map navigation dashboard
├── index.html          # Login page (Landing page)
├── login.php           # PHP authentication handler
├── signup.html         # User registration interface
├── signup.php          # PHP database insertion handler
├── style.css           # Styling rules for authentication pages
└── settings.json       # Live server settings
```
