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
                   <li><a href='admin.php'>Home</a></li>
                   <li><a href='Issue book.php'>Issue book</a></li>
                   <li><a href='returnbook.php'>Return Book</a></li>
                   <li><a href='Create user.php'>Create user</a></li>
                   <li><a href='Create admin.php'>Create new admin</a></li>
                   <li><a href='Password.php'>Change Password</a></li>
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
if($conn->connect_error)
    die("N ocnnection");
$sql="select * from issuebook";
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
        <th>Contact</th>
        <th>DateOfIssue</th>
    </tr>
    <?php
    while($row=$records->fetch_assoc())
    {
    ?>
    <tr>
        <td><?php echo $row['username'];?></td>
        <td><?php echo $row['book_Id'];?></td>
        <td><?php echo $row['book_Title'];?></td>
        <td><?php echo $row['contact'];?></td>
        <td><?php echo $row['date_Of_Issue'];?></td>
        
    </tr>
    <?php    
    }
    ?>
    </table>
<?php
}
else
{
    require "Issuestatus.php";
     echo "<script>";
    echo "var mydiv=document.getElementById('section');";
    echo "mydiv.innerHTML='<h2 style=\"color: red;\">No record is found.</h2>';";
    echo "</script>";
}
?>
<br>
<?php
?>
            </div>
        </div>
    </div>
        <div class="navbar2">
        <nav1>
        <br>
          <img id = "logo" src="https://i.pinimg.com/originals/0a/cd/50/0acd5002683fbcf2b720004f201ee530.jpg">
            <ul id='MainMenu1'>
             <li><a href='Issuestatus.php'>Issue Status</a></li>
             <li><a href='Returnstatus.php'>Return Status</a></li>
             <li><a href='Addbook.php'>Add New books</a></li>
             <li><a href='removebook.php'>Remove books</a></li>
             <li><a href='Resetbooks.php'>Reset book details</a></li>
             <li><a href='searchuser.php'>Search a user</a></li>
             <li><a href='Suggestions.php'>Suggestions or comments</a></li>
            </ul>
         </nav1>
        </div>
    </div>
    </body>

    <script>
        document.addEventListener('contextmenu', event => event.preventDefault());
        document.getElementById('logo').setAttribute('draggable', false);
    </script>

</html>