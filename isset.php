<?php
if( isset($_POST['submit'])){
    $username=$_POST['name'];
    $email=$_POST['email'];
    if(strlen($username)<=0){
        echo "<span style='color:red'>Please Enter your name</span>";
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "<span style='color:red'>Please Enter your email id</span>";
    }
}
?>

<html>
<body>
<!-- get ki jaga post lagado to post se hojaye ga -->
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit" name="submit">
</form>

</body>
</html>