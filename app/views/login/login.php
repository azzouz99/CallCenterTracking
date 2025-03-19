<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTL - Login</title>
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/login.css"> 
</head>
<body>
    <div class="login-container">
    <img src="public/assets/images/logo.svg" alt="BTL Logo">
  
        <?php if (isset($_SESSION['error'])) echo "<p class='error'>".$_SESSION['error']."</p>"; ?>
        <form action="login" method="POST">
        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']; ?>">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
            
            <button  class="login-btn" type="submit">Login</button>
        </form>
    </div>
</body>
</html>