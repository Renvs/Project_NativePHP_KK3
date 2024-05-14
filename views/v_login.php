<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/v_login.css">
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Audiowide&family=Fira+Sans&family=Maven+Pro&family=Nunito+Sans:opsz,wght@6..12,500&family=Nunito:wght@300;400&family=Poppins:wght@400;500&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        
    }

    .login_box {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        width: 420px;
        height: 480px;
        padding: 30px;
        border-radius: 15px;
        background-color: azure;
        box-shadow: -1px 1px 32px -2px rgba(0,0,0,0.56);
-webkit-box-shadow: -1px 1px 32px -2px rgba(0,0,0,0.56);
-moz-box-shadow: -1px 1px 32px -2px rgba(0,0,0,0.56);
    }

   .login_header {
        text-align: center;
        margin: 0px 0 40px 0;
   }

   .login_header h1 {
        background: -webkit-linear-gradient(90deg, #000000 0%, #2D3436 100%);
        -webkit-text-fill-color: transparent;
        -webkit-background-clip: text;
        font-size: 40px;
        font-weight: 600;
   }

    .inp_box {
        display: flex;
        flex-direction: column;
    }

    .inp_box input {
        margin: 0 0 20px 0;
        padding: 0 15px;
        height: 40px;
        width: 330px;
        border: none;
        border-radius: 30px;
        background-color: #333;
        color: #dfdfdf;
        box-shadow: 0px 5px 10px 1px rgba(0, 0, 0, 0.05);
        outline: none;
        transition: .3s;
    }

    .inp_box input:focus {
        width: 340px;
    }

    .inp_box label {
        margin: 0 0 7px 10px;
        font-size: 18px;
        font-weight: 500;
    }

    .inp_forgot {
        display: flex;
        gap: 83px;
        margin: 0 0 40px 0;
        font-size: 14px;
    }

    section {
        display: flex;
        align-items: center;
        padding: 0 0 0 0;
        color: #555;
    }

    #check {
        margin: 0 5px 0 0;
    }

    a {
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    section a{
        color: #555;
    }

    .inp_submit {
        position: relative;
        transition: .3s;
    }

    .btn_btn-primary {
        width: 330px;
        height: 40px;
        background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
        border: none;
        border-radius: 30px;
        cursor: pointer;
        transition: .3s;
    }

    .inp_submit:hover {
        transform: scale(1.03);
        background-color: azure;
    }

    .inp_submit label {
        position: absolute;
        top: 40%;
        left: 50%;
        color: #fff;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        cursor: pointer;
        font-weight: 500;
    }


</style>
<body>
    <form class="login_box" action="login.php" method="POST">
        <div class="login_header">
            <h1>Login</h1>
        </div>
        <div class="inp_box">
            <label for="input-field">Username</label>
            <input type="text" name="username" class="input-field" placeholder="" autocomplete="off" required>
        </div>
        <div class="inp_box">
            <label for="input-field">Password</label>
            <input type="password" name="password" class="input-field" placeholder="" autocomplete="off" required>
        </div>
        <div class="inp_forgot">
            <section>
                <input type="checkbox" id="check">
                <label for="check">Remember Me</label>
            </section>
            <section>
                <a href="#">Forgot Password</a>
            </section>
        </div>
        <div class="inp_submit">
            <button type="submit" class="btn_btn-primary"></button>
            <label for="btn_btn-primary">Login</label>
        </div>

</body>
</html>