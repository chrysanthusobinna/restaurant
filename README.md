# Laravel Restaurant Website

## Overview
This project is a **Restaurant Management System** built using Laravel. It provides functionality for administrators to manage restaurant operations efficiently, including categories, menus, contact information, and orders. For users, the website serves as an online platform to explore the restaurant menu and place food orders, making it easy to enjoy the restaurant's offerings from anywhere.

---

## Features
- **Category Management**: Admins can create, update, and delete categories for organizing the menu.
- **Menu Management**: Add, edit, and delete menu items with details like pricing, description, and categories.
- **Contact Management**: Manage the restaurant's contact information, including phone numbers, addresses, working hours, and social media handles.
- **Order Management**: View and process customer orders efficiently.
- **Explore Menu**: Customers can browse the restaurant's menu, filter by categories, and view detailed information about each item.
- **Online Food Ordering**: Users can add menu items to their cart, place orders online, and receive confirmation for their orders.
- **Responsive Design**: The website is fully responsive, ensuring it works seamlessly on all devices.
- **Dynamic Content**: Admins can update information like working hours, addresses, and phone numbers dynamically.

---

## Security
Best practices are being employed in this project according to the latest Laravel 11 documentation. This includes proper data encryption and two-factor authentication to ensure the security and privacy of user data.

---

## Tools & Technologies Used
- **Laravel Framework**: PHP framework for building robust web applications.
- **MySQL**: Database for storing restaurant data (menus, orders, contact info, etc.).
- **AdminLTE 3**: For the admin dashboard interface ([AdminLTE 3 Dashboard](https://adminlte.io/themes/v3/)).
- **HTML5 & CSS3**: For building the front-end structure and design.
- **JavaScript & jQuery**: For interactive elements and dynamic behavior.
- **Bootstrap**: For responsive design and layout.
- **Templatemagic**: Portfolio template ([Portfolio by Templatemagic](https://themeforest.net/user/templatemagic/portfolio)).

---

## How to Run This Project on Your Local Machine
Follow these steps to set up and run the project locally:

### **Step 1: Clone the Repository**
```bash
git clone https://github.com/chrysanthusobinna/restaurant.git
cd restaurant
```

### **Step 2: Set Up the Environment**
1. Rename `.env.example` to `.env`:
   ```bash
   mv .env.example .env
   ```
2. Configure your `.env` file with the correct settings:
   ```plaintext
   DB_CONNECTION=sqlite
   # DB_HOST=
   # DB_PORT=
   # DB_DATABASE=
   # DB_USERNAME=
   # DB_PASSWORD=
   
   MAIL_MAILER=log
   MAIL_HOST=1
   MAIL_PORT=
   MAIL_USERNAME=
   MAIL_PASSWORD=
   MAIL_ENCRYPTION=
   MAIL_FROM_ADDRESS=
   MAIL_FROM_NAME="${APP_NAME}"
   ```

### **Step 3: Set Up the Database**
1. Create a new MySQL database (e.g., `restaurant_db`).
2. Run migrations and seeders:
   ```bash
   php artisan migrate --seed
   ```

### **Step 4: Start the Application**
Run the development server:
```bash
php artisan serve
```
Visit the application at `http://127.0.0.1:8000`.

### **Step 5: Create an Admin User**
To create an admin user with global rights:
1. Edit the `UserSeeder` file located at `database/seeders/UserSeeder.php` and set the user details as desired.
2. Run the following command to seed the user:
   ```bash
   php artisan db:seed --class=UserSeeder
   ```
This user account will have global rights and can be used to create other user accounts.

---

## Credits
- **[AdminLTE 3](https://adminlte.io/themes/v3/)**: The admin dashboard design is powered by AdminLTE 3, offering a modern and customizable interface.
- **[Templatemagic Portfolio](https://themeforest.net/user/templatemagic/portfolio)**: The front-end template for the website is inspired by Templatemagic's portfolio designs.

---

Feel free to fork this repository or contribute to its development by submitting a pull request! 

---
 