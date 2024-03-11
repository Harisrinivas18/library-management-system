<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin Page</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div class="full-page1">
        <div class="navbar1"> 
        <nav>
               <ul id='MainMenu'>
               <li><a href='student_home.php'>Home</a></li>
                   <li><a href='Issuestatus_student.php'>Borrow Status</a></li>
                   <li><a href='student_password.php'>Change Password</a></li>
                   <li><a href='booksavailable_student.php'>Books Available</a></li>
                   <li><a href='logout.php'>Logout</a></li>
               </ul>
            </nav>
        </div>
        <div class="HomePage1">
            <h1>Library Management System</h1>
            <a href="Issuestatus_student.php">Borrow Status</a>
            <h2> Library will be open from 8:00 AM - 6:00 PM Every day</h2><br>
        </div>
    </div>
    </body>

    <script>
        document.addEventListener('contextmenu', event => event.preventDefault());
        document.getElementById('logo').setAttribute('draggable', false);
    </script>

</html>