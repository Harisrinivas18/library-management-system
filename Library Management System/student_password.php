<html>
    <head>
        <meta charset="UTF-8">
        <title>Password Change page</title>
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
        <div id='issue-form' class='issue-page'>
            <div class="form-box">
                <div class='button-box'>
                <form id='login' class='input-login' method='POST'action='pass_student.php'>
                    
                    <input type='password' class='input-field' placeholder='&#xf084; Current Password' name='op' required><br><br>
                    <input type='password' class='input-field' placeholder='&#xf084; New Password' name='np' required><br><br>
<input type='password' class='input-field' placeholder='&#xf084; Confirm Password' name='cnp' required><br><br>
                    <input type="submit" value="&#xf2b5; Change" name="pass" class="submit-btn"/>
                </form>
            </div>
        </div>
    </div>

    </body>

    <script>
        document.addEventListener('contextmenu', event => event.preventDefault());
        document.getElementById('logo').setAttribute('draggable', false);
    </script>

</html>