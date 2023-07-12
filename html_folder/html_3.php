<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="html_3.php" method="post">
        Họ và tên: <input type="text" name="name" required><br>
        Ngày sinh: <input type="date" name="dob" required><br>
        Số điện thoại: <input type="tel" name="phone" required><br>
        Email: <input type="email" name="email" required><br>
        Giới tính: 
                <input type="radio" name="gender" value="Nam" checked> Nam
                <input type="radio" name="gender" value="Nữ"> Nữ
                <input type="radio" name="gender" value="Khác"> Khác <br>
        Thông tin mô tả về bản thân: <br>
        <textarea name="info" rows="5" cols="40" required></textarea><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = $_POST["name"];
        $dob = $_POST["dob"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];
        $info = $_POST["info"];

        echo "Họ và tên: " . $name . "<br>";
        echo "Ngày sinh: " . $dob . "<br>"; 
        echo "Số điện thoại: " . $phone . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Giới tính: ". $gender . "<br>";
        echo "Thông tin mô tả về bản thân: " . $info;
    }

?>

