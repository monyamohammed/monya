<?php
$host = "localhost";
$dbname = "users_db";
$username = "root";
$password = "";
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Failed to connect to database: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $remember = isset($_POST['remember']) ? 1 : 0;

        $sql = "SELECT * FROM users WHERE username = :username";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch();

        if ($user) {
            if ($password === $user['password']) {
              $secretkey="6Lek124pAAAAAMfCHstbciTl5nmrpkWiHN4DXf5O";
                $response=$_POST['g-recaptcha-response'];
               $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretkey) . '&response=' . urlencode($response);
                $response = file_get_contents($url);
                $res = json_decode($response, true);

                if ($res['success']) {
                  echo "successfully done";
                    header('Location: pag2.php');//نقل للصفحة
                    exit;
                } else {
                    echo "error";
                }
            } else {
                echo "invalid password!";
            }
        } else {
            if ($remember) {
                $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(['username' => $username, 'password' => $password]);
                echo "user added successfully!";
                header('Location: pag2.php');
            }
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='log.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src='main.js'></script>
    <!-- re-captcha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" name="username" required>
                        <label for="">user name</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" required>
                        <label for="">Password</label>
                    </div>
                    <!---->
                    <!--<div class="g-recaptcha" id="capatch" data-sitekey="6LeSsGMpAAAAAGDu2CLjfcwA2LI60THTYfq5Im6T"></div>-->
                    <div class="g-recaptcha" data-sitekey="6Lek124pAAAAAAA5PUPGUL5Z05Z0lsD2wlVxrwnk"></div>

                    <div class="forget">
                        <label for="">
                            <input type="checkbox" name="remember" value="1">Remember Me <a href="#">Forget Password</a>
                        </label>
                    </div>
                    <input type="submit" value="Login" class="loginbutton">
                    <div class="register">
                        <p>Don't have an account? <a href="">Register</a></p>
                    </div>
                </form>
                <!---->
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</body>
</html>