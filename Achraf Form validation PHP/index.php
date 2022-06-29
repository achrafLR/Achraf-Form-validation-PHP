<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form in php</title>
    <link rel="stylesheet" href="style.css">
</head> 

<body>

    <div class="container">
        <form id="contact" action="result.php" method="post">
            <h3>Ashraf Contact Form</h3>
            <h4>Contact us for custom quote</h4>
            <fieldset>
                <input placeholder="Your name" name="name" type="text" tabindex="1"  autofocus value="<?php if(isset($name)) echo $name?>">
                <span style="<?= $color?>">
                    <?php if(isset($nameErr)) echo $nameErr?>
                </span>
            </fieldset>
            <fieldset>
                <input placeholder="Your Email Address" name="email" type="email" tabindex="2" value="<?php if(isset($email)) echo $email?>" >
                <span style="<?= $color?>">
                    <?php if(isset($emailErr)) echo $emailErr?>
                </span>
            </fieldset>
            <fieldset>
                <input placeholder="Your Phone Number (optional)" name="phone" type="tel" tabindex="3" value="<?php if(isset($phone)) echo $phone?>">
                <span style="<?= $color?>">
                    <?php if(isset($phoneErr)) echo $phoneErr?>
                </span>
            </fieldset>
            <fieldset>
                <input placeholder="Your Web Site (optional)" name="website" type="url" tabindex="4" value="<?php if(isset($website)) echo $website?>">
            </fieldset>
            <fieldset>
                <textarea placeholder="Type your message here...." name="comment" tabindex="5" ><?php if(isset($comment)) echo $comment?></textarea>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
            </fieldset>
            <p class="copyright">developed by AchrafLR <a href="https://github.com/achrafLR" target="_blank" title="github=>achrafLR">achrafLR</a></p>
        </form>
    </div>
</body>

</html>