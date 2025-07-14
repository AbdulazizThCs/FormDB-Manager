# WebFormDB
A modern web application for managing form entries and database records.

# Project Idea  
This project creates a simple, secure web form that takes a user's name and age, submits it to a PHP server connected to a MySQL database, and displays all stored records on a styled web table. Each record features a toggle button that instantly switches the status between 0 and 1 in the database and reflects the change on the webpage.

# Features  
- Real-time database table with modern UI.  
- Toggle button to instantly switch record status.  
- Clean, modern, and responsive page layout.  
- Code is organized and highly readable.  
- Built with the latest web technologies: HTML5, CSS3, JS, PHP, MySQL.

# Project Files
- `Index.html` Welcome page and form page layout with inputs and social icons.
- `Style.css` Complete styling for both form and table pages.
- `Main.js` JavaScript for toggling form visibility and social icon animations.
- `DB.php` PHP file to process form data and insert it into the database.
- `Table.php` PHP file to fetch data and display it in a table with a toggle button.

# External Resources Used

1-**Boxicons**
`<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>`
Why I Used It:
To display modern, clean, scalable social media icons on the form page.

Where It Came From:
From Boxicons official CDN via unpkg.com CDN.

2-**Google Fonts (Poppins)**
`<link href='https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap' rel='stylesheet'>`
Why I Used It:
To give the website a clean, modern, and readable font style for better UI design.

Where It Came From:
From Google Fonts official CDN.

# How to Use  
1. **Download and Install XAMPP** as a local development server  
2. Start **Apache** and **MySQL** modules from the XAMPP Control Panel  
3. Go to **phpMyAdmin** (`http://localhost/phpmyadmin`)  
4. Create a new database named `my_database`  
5. Inside `my_database`, create a table `users` with the following columns:
   - `ID` (INT, Primary Key, Auto Increment)
   - `Name` (VARCHAR)
   - `Age` (INT)
   - `Status` (TINYINT or INT, Default 0)
6. Place all project files into `htdocs/project` folder  
7. Open `http://localhost/project/Index.html` in your browser  
8. Start using the web form and manage your records dynamically

# 📹 Project Preview



https://github.com/user-attachments/assets/58df7e5b-1062-4980-83b8-6a269b969221

<hr>

Developed by **Abdulaziz AL-Thomali**

 
