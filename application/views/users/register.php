<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<section class="login-panel">
    <form method="POST" action="<?php echo base_url(); ?>users/insert_registration">
        <div class="msg"></div>
        <div class="right-side">
            <h1>Sign Up</h1>
            <input type="text" name="fname" placeholder="Firstname" required="">
            <input type="text" name="mname" placeholder="Middlename">
            <input type="text" name="lname" placeholder="Lastname" required="">
            <input type="number" maxlength="13" name="contact_no" placeholder="Contact Number" required="">
            <input type="email" name="email" placeholder="Email" required="">
            <input type="password" name="password" id="password" placeholder="Password" required="">
            <input type="password" name="re_password" id="re_password" onblur="checkpassword()" placeholder="Repeated password" required="">
            <input type="submit" value="Register" class="submit-btn" style="background: #dc5a2c;">
            <center><a href="<?php echo base_url(); ?>users/index">Login</a></center>
        </div>
    </form>
</section>

<style>
    body {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        height: 100vh;
        background-image: url(../assets/img/seafood2.png);
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .login-panel {
        width: 400px; /* Adjusted width */
        background-color: #fff;
        border-radius: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        height: auto;
    }

    .right-side {
        padding: 20px 25px;
        box-sizing: border-box;
        width: 100%;
    }

    .right-side h1 {
        text-transform: uppercase;
        margin: 0;
    }

    .right-side input {
        margin: 6px 0;
        padding: 8px 0;
        width: 100%;
        border: 0;
        border-bottom: 2px solid #888;
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
    }

    input.submit-btn:hover {
        cursor: pointer;
    }

    a {
        text-decoration: none;
        color: #257aa6;
    }

    *:focus {
        outline: none;
    }

    @media only screen and (max-width: 1100px) {
        .login-panel {
            width: 350px; /* Adjusted for smaller screens */
            height: auto;
        }
    }

    @media only screen and (max-width: 800px) {
        .login-panel {
            width: 80%; /* Responsive for mobile devices */
            height: auto;
        }
        .right-side input {
            width: 100%;
        }
    }
</style>

<script type="text/javascript">
    function checkpassword() {
        var re_password = $('#re_password').val();
        var password = $('#password').val();
        if (password != re_password) {
            $('div.msg').text('Error: Password did not match.');
            $('div.msg').addClass("alert-danger");
            $('div.msg').attr("style", "padding-top:10px;width:100%;margin-top:10px;height:30px;background:#ff4f4fd6;text-align:center");
        } else {
            $('div.msg').hide();
        }
    }
</script>
