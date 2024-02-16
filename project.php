<!-- php
<?php
$dsn="mysql:host=localhost;dbname=monya";
$user="root";
$pass="";
$db=new PDO($dsn,$user,$pass);
if (isset($_POST['sub']))
{
    $email=$_POST['email']; 
    $pass=$_POST['pass'];
 }
 $sql=$db->prepare("insert into mon(email,pass)
values('$email','$pass')");
 $sql->execute();

 ?>
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>

<body>
    
    <section>
        <form method=post >
            <h1>login</h1>
            <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
               <input type="email" name="email" required>
                <label for="">Email</label>
            </div>
            <div class="inputbox">
            <ion-icon name="lock-closed-outline"></ion-icon>
          <input type="password"  name="pass" required>
            <label for="">Password</label>
            </div>
            <div class="forget">
            <label for=""> <input type="checkbox"   >Remember Me</label>
            <a href="#">Forget Pawword</a>
</div>

            <button><a href='pag2.php'>log in</button>
            <div class="register">
                <p>Don't have a account <a href='#'>Register</a></p>
              </div>
              <div class="g-recaptcha" data-sitekey="6Lerv2MpAAAAAOyTi5oWDOAn_cS2nNDCbto2AriL"></div>
</form>
</section>
</body>

</html>