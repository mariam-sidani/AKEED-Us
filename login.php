<?php
require_once('config.php'); // Include your database configuration file
session_start();

if (isset($_POST['login'])) {
    $email = trim($_POST['email']); // Trim spaces for better matching
    $password = $_POST['password'];

    // Fetch user from the database
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && $user['password'] === $password) {
        // User authenticated, set session variables
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['firstname'] = $user['firstname'];
        $_SESSION['lastname'] = $user['lastname'];

        // Redirect to product.php with an alert
        echo "<script>
                alert('Welcome to our site! Please place your order.');
                window.location.href = 'product.php';
              </script>";
        exit;
    } else {
        $error_message = "Invalid email or password.";
    }
}
?>

<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <title>User Login</title>
    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #6a4a3a;
        }

        .form-container {
            width: 600px;
            background: #e3c099;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-custom {
            background-color: #d17d2a;
            color: white;
            border: none;
        }

        .btn-custom:hover {
            background-color: #b36222;
        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="col-md-6 form-container">
            <form action="login.php" method="post">
                <h1 class="text-center">Login</h1>
                <p class="text-center">Enter your credentials.</p>
                
                <?php if (isset($error_message)) : ?>
                    <div class="alert alert-danger"><?php echo $error_message; ?></div>
                <?php endif; ?>

                <label for="email"><b>Email Address</b></label>
                <input class="form-control mb-3" type="email" name="email" id="email" required>

                <label for="password"><b>Password</b></label>
                <input class="form-control mb-3" type="password" name="password" id="password" required>

                <div class="text-center">
                    <input class="btn btn-custom" type="submit" value="Login" name="login">
                </div>
            </form>
        </div>
    </div>
</body>

</php>
