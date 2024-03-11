<html>
    <head>
        <meta charset="UTF-8">
        <title>Issue status page</title>
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
            <div class="suggestion-box">
                <div class='button-box'>
                <?php
error_reporting(0);
session_start();
?>
   <style>
table {
        
        width: auto;
        height:auto;
    }
    table,th,td {
        padding:7px;
        border: 3px solid lightblue;
        border-collapse: collapse;
    }
th{
color:lightsalmon;
        font-size: 20px;
}
    td {
color:lightgray;
        font-size: 17px;
    }
</style>
<?php
$conn=new mysqli('localhost','root','','lms');
$username = $_SESSION['username'];
if($conn->connect_error)
    die("N ocnnection");
$sql="select * from issuebook where username='library/user/$username'";
$records=$conn->query($sql);
if($records->num_rows!=0)
{
//if row exist
    ?>
    <table>
    <tr>
        <th>Username</th>
        <th>BookId</th>
        <th>BookTitle</th>
        <th>DateOfIssue</th>
        <th>DateOfReturn</th>
    </tr>
    <?php
    while($row=$records->fetch_assoc())
    {
    ?>
    <tr>
        <td><?php echo $row['username'];?></td>
        <td><?php echo $row['book_Id'];?></td>
        <td><?php echo $row['book_Title'];?></td>
        <td><?php echo $row['date_Of_Issue'];?></td>
        <td><?php echo $row['date_Of_Return'];?></td>
        
    </tr>
    <?php    
    }
    ?>
    </table>
<?php
}
else
{
    
    echo "
                
                  <h3 class='link' style = 'color: red ;' >No Book Data Found</h3>
                  ";
}
?>
<br>
<?php
?>
            </div>
        </div>
    </div>
        
    </body>

    <script>
        document.addEventListener('contextmenu', event => event.preventDefault());
        document.getElementById('logo').setAttribute('draggable', false);
    </script>

</html>