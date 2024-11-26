<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> 
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); 
        function hideURLbar(){ window.scrollTo(0,1); } 
    </script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"> </script>
    <style type="text/css">
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            height: 100vh;
            background-image: url(<?php echo base_url() ?>assets/img/seafood2.png);
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .app {
            width: 400px;
            background-color: #fff;
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 30px;
            box-shadow: 0 6px 31px -2px rgba(0, 0, 0, 0.3);
        }

        h1 {
            text-transform: uppercase;
            font-size: 24px;
            color: #333;
            margin-bottom: 1em;
        }

        input {
            margin: 8px 0;
            padding: 10px;
            width: 100%;
            border: none;
            border-bottom: 2px solid #888;
            font-size: 16px;
            color: #333;
            background-color: #f7f7f7;
        }

        input::placeholder {
            color: #888;
            font-size: 14px;
        }

        input.submit-btn {
            border: 0;
            border-radius: 15px;
            width: 100%;
            font-size: 14px;
            font-weight: 600;
            padding: 10px;
            color: white;
            background-color: #dc5a2c;
            cursor: pointer;
        }

        input.submit-btn:hover {
            background-color: #ff6e3d;
        }

        a {
            text-decoration: none;
            color: #257aa6;
            font-size: 14px;
            margin-top: 1em;
        }

        .msg {
            display: none;
            padding: 10px;
            width: 100%;
            background: #ff4f4fd6;
            text-align: center;
            border-radius: 10px;
            margin-top: 10px;
            color: #fff;
        }

        *:focus {
            outline: none;
        }

        @media only screen and (max-width: 1100px) {
            .app {
                width: 350px;
                padding: 20px;
            }
        }

        @media only screen and (max-width: 800px) {
            .app {
                width: 80%;
                padding: 20px;
            }
            input {
                padding: 12px 15px;
            }
        }
    </style>
</head>
<body>
    <div class="app">
        <form method="POST" action="<?php echo base_url(); ?>users/login">
            <h1>Login</h1>

            <!-- Display any error message if it exists -->
            <?php
                $error_msg = $this->session->flashdata('error_msg');  
                if ($error_msg) {
            ?>
            <div class="msg">
                <?php echo $error_msg; ?>
            </div>
            <?php } ?>

            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Password" required>
            <p class="light" id="flip" style="cursor: pointer; color: #020202; font-weight: 550;">Forgot password?</p>

            <input type="submit" class="submit-btn" value="Login">

            <p>Don't have an account? <a href="<?php echo base_url(); ?>users/register">Register</a></p>
        </form>

        <!-- Reset password form (hidden initially) -->
        <form style="display:none" action="<?php echo base_url(); ?>users/reset" method="post">
            <h1>Reset Password</h1>
            <div class="msg"></div>
            <input type="email" placeholder="Email Address" class="trans" name="email" required>
            <input type="submit" class="submit-btn" value="Reset">
            <button type="button" id="back" class="submit-btn">Back</button>
        </form>
    </div>

    <script>
        $(document).ready(function(){
            $("#flip").click(function(){
                $("form").animate({
                    height: 'toggle'
                });
            });
            $("#back").click(function(){
                $("form").animate({
                    height: 'toggle'
                });
            });
        });
    </script>
</body>
</html>
