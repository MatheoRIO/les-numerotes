<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="description" content="Idéo"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="shortcut icon" type="image/x-con" href="assets/logo-ideo-point-com.webp"> -->
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/login.css"> -->
    <!-- <script src="js/index.js" defer></script> -->
    
    <title>Connexion - Idéo</title>
</head>
<body>
    <!-- <header>
        <img draggable="false" src="assets/logo_ideo_point_com.png" alt="Logo Idéo point com">
    </header> -->
    <main>
        <?php
            session_start();
            $user_verify = 'Admin';
            $password_verify = 'bbe53f6251b67bef7e6e8c008916c4c80cfdb55175e912c5ac50c73246425fb1';
            if (isset($_POST['username'])){
                $username = stripslashes($_REQUEST['username']);
                $password = stripslashes(hash('sha3-256', $_REQUEST['password']));
                if($password == $password_verify){
                    $_SESSION['username'] = $username;
                    $_SESSION['password'] = $password;
                    header("Location: index.php");
                }else{
                    $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
                }
            }
        ?>
        <form action="" method="post" name="login">
            <input type= "text" name="username" placeholder="Identifiant" autocomplete="off">
            <input type= "password" name="password" placeholder="Mot de passe" autocomplete="off">
            <?php if (!empty($message)) { ?>
                <p class="errorMessage"><?php echo $message; ?></p>
            <?php } ?>
            <input type="submit" name="submit" value="Connexion">
        </form>
    </main>
</body>
</html>