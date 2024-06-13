# Inventory Management System (IMS) - DBMS Project

## Overview

This project is an Inventory Management System (IMS) developed as part of a Database Management System (DBMS) course. The system allows users to manage inventory records efficiently. The project is built using HTML, CSS, JavaScript, and PHP, and it utilizes a MySQL database. XAMPP is used to set up the local server environment.

## Features

- Add, update, and delete inventory items
- Search and filter inventory records
- User-friendly interface
- Real-time data validation

## Prerequisites

Before you begin, ensure you have met the following requirements:
- You have installed [XAMPP](https://www.apachefriends.org/index.html) on your local machine.

## Getting Started

Follow these instructions to set up and run the Inventory Management System on your local machine.

### 1. Install XAMPP

Download and install XAMPP from the [official website](https://www.apachefriends.org/index.html). XAMPP includes Apache, MySQL, PHP, and Perl, making it easy to set up a local web server environment.

### 2. Set Up the MySQL Database

#### Option A: Connect to an Existing MySQL Database

If you already have a MySQL database:
1. Open XAMPP Control Panel.
2. Start the MySQL server by clicking the "Start" button next to MySQL.
3. Use PHPMyAdmin to connect to your existing MySQL database.

#### Option B: Create a New MySQL Database

If you need to create a new database:
1. Open XAMPP Control Panel.
2. Start the MySQL server by clicking the "Start" button next to MySQL.
3. Open PHPMyAdmin by navigating to `http://localhost/phpmyadmin` in your web browser.
4. Create a new database for the IMS project:
   - Click on "Databases" tab.
   - Enter a name for your database (e.g., `ims_db`).
   - Click "Create".

### 3. Configure the Project Files

1. Move the project files to the `htdocs` folder in your XAMPP installation directory. Typically, this is located at `C:\xampp\htdocs` on Windows or `/Applications/XAMPP/htdocs` on macOS.
2. Ensure all project files are in a subdirectory (e.g., `C:\xampp\htdocs\ims`).

### 4. Configure Database Connection

Update the database connection settings in the PHP files to match your MySQL configuration. Typically, this involves editing a configuration file (e.g., `config.php`) with the following details:
- Database host (usually `localhost`)
- Database name
- Database username
- Database password

### 5. Start the Servers

1. Open XAMPP Control Panel.
2. Start the Apache web server by clicking the "Start" button next to Apache.
3. Ensure the MySQL server is running.

### 6. Access the Inventory Management System

1. Open a web browser.
2. Navigate to `http://localhost/ims/new.php`.

You should now see the frontend page of the Inventory Management System. From here, you can start managing your inventory records.

## Usage

- **Add Inventory**: Use the provided form to add new inventory items.
- **Update Inventory**: Select an item to update its details.
- **Delete Inventory**: Remove items from the inventory.
- **Search Inventory**: Use the search feature to find specific items quickly.

## Contributing

If you would like to contribute to this project, please fork the repository and create a pull request with your changes. Contributions are always welcome!

## License

This project is open-source and available under the [MIT License](LICENSE).

## Acknowledgments

- Thanks to the DBMS course instructors for their guidance.
- Special thanks to the contributors of XAMPP and PHPMyAdmin for their excellent tools.

---

Feel free to contact me if you have any questions or need further assistance.

Happy coding!
