<?php
$con=mysqli_connect('localhost', 'root');
if($con){
    echo "Connection succesful";
}

mysqli_select_db($con, 'web');
$name=$_POST['name'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$comments=$_POST['comments'];

// $comment_length = strlen($comment);

if($comment_length > 100)
{
    header("location:contact.html?error=1");
}
else
{
        $query="INSERT into web1(name,lastname,email,comments)
        values('$name','$lastname','$email','$comments')";
        echo "$query";
        mysqli_query($con,$query);
        header("location:contact.html");
        echo "$name", "$lastname", "$email", "$comments";
    }
?>
