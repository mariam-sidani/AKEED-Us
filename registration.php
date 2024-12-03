<?php
require_once('config.php');

if (isset($_POST["create"])) {
    $firstname  = $_POST["firstname"];
    $lastname   = $_POST["lastname"];
    $email      = $_POST["email"];
    $phonenumber = $_POST["phonenumber"];
    $password   = $_POST["password"];

    // Check if user already exists by firstname, lastname, and email
    $sql = "SELECT * FROM users WHERE firstname = ? AND lastname = ? AND email = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$firstname, $lastname, $email]);
    $existingUser = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($existingUser) {
        // User already exists
        echo '<script>
            alert("This user already exists.");
            window.location.href = "product.php";
        </script>';
    } else {
        // Proceed with inserting the new user
        $sqlInsert = "INSERT INTO users (firstname, lastname, email, phonenumber, password) VALUES (?, ?, ?, ?, ?)";
        $stmtInsert = $db->prepare($sqlInsert);
        $result = $stmtInsert->execute([$firstname, $lastname, $email, $phonenumber, $password]);

        if ($result) {
            echo '<script>
                alert("Signed up successfully.");
                window.location.href = "product.html";
            </script>';
        } else {
            echo 'There were errors while saving the data.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <title>User Registration</title>

    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #6a4a3a; /* Light gray background */
        }

        .form-container {
            background: #e3c099;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-custom {
            background-color: #d17d2a; /* Warm terracotta */
            color: white; /* Text color */
            border: none;
        }

        .btn-custom:hover {
            background-color: #b36222; /* Darker shade on hover */
        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="col-md-6 form-container">
            <form action="registration.php" method="post">
                <h1 class="text-center">Registration</h1>
                <p class="text-center">Fill up the form.</p>
                
                <!-- First Name and Last Name in a single row -->
                <div class="row mb-3">
                    <div class="col">
                        <label for="firstname"><b>First Name</b></label>
                        <input class="form-control" type="text" name="firstname" id="firstname" required>
                    </div>
                    <div class="col">
                        <label for="lastname"><b>Last Name</b></label>
                        <input class="form-control" type="text" name="lastname" id="lastname" required>
                    </div>
                </div>

                <label for="email"><b>Email Address</b></label>
                <input class="form-control mb-3" type="email" name="email" id="email" required>

                <label for="phonenumber"><b>Phone Number</b></label>
                <input class="form-control mb-3" type="tel" name="phonenumber" id="phonenumber" required>

                <label for="password"><b>Password</b></label>
                <input class="form-control mb-3" type="password" name="password" id="password" required>

                <div class="text-center">
                    <input class="btn btn-custom" type="submit" value="Sign Up" name="create">
                    <br><br>
                    <div class="text-center">
                        <a href="login.php" class="btn btn-custom">Login</a>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</body>

</html>
