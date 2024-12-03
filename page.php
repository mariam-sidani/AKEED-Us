<?php
$servername = "localhost"; 
$username = "root";
$password = ""; 
$dbname = "akeedres"; 


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products"; 
$result = mysqli_query($conn, $sql);


if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

$conn->close();
?>

<!DOCTYPE php>
<php>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Akeed Restaurant </title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Our Products</h1>
    <table border="1" align="center" width="70%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                   ?>
                  <tr>
                    <td><?php echo phpspecialchars($row["name"]); ?></td>
                    <td><?php echo "$" . phpspecialchars($row["price"]); ?></td>
                    <td><img id="timages" src="images/<?php echo phpspecialchars($row["image"]); ?>" alt="<?php echo phpspecialchars($row["name"]); ?>"></td>
                  </tr> 
                   <?php 
                }
            } else {
                ?>
                <tr>
                    <td colspan="3">No products available</td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

    <style>
        .dessert-item img {
            width: 200px; 
            height: auto; 
            max-width: 100%; 
        }
        #timages {
            height: 100px; 
            min-width: 100%; 
        }
    </style> 
</body>
</php>
