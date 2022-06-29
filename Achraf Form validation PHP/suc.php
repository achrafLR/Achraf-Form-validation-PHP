<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form in php</title>
    <link rel="stylesheet" href="style.css">
</head>

<body style="background: rgb(0,0,0); background: linear-gradient(207deg, rgba(0,0,0,1) 0%, rgba(0,0,0,1) 100%);">

    <div class="container">
        <form id="contact" action="result.php" method="post" style="background: rgb(0,0,0); background: linear-gradient(207deg, rgba(0,0,0,1) 0%, rgba(124,124,124,1) 100%);">
            <h3 style="text-align: center; line-height: 2rem; color: #ffff;">Hello <b style="color: #F1F1F1;"><?=$name?></b>  thank you for registering with us</h3>
            <p class="copyright">developed by AchrafLR <a href="https://github.com/achrafLR" target="_blank" title="github=>achrafLR">achrafLR</a></p>
        </form>
    </div>
</body>

</html>