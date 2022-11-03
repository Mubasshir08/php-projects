<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php require_once "header.php" ?>
<section class="user_profile">
    <div class="user_info">
        <div class="user_img"><img src="images/user2.jpg" alt="user_img"></div>
        <div class="user_bio">
            <table>
                <tr> <td> Username : </td> </tr>
                <tr> <td> Email : </td> </tr>
            </table>
        </div>
    </div>
    <div class="post_area">
        <textarea name="post" id="postArea"  rows="3"></textarea>
        <br>
        <button class="post_btn">Post</button>
    </div>
</section>
</body>
</html>