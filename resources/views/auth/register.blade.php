<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register - Blog</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .main {
            display: flex;
            flex-direction: row;
        }

        .image-part {
            background-color: #003240;
            width: 50%;
            height: 100vh;
        }

        .intro {
            color: white;
            font-weight: 600;
            font-size: 42px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            text-align: center;
            margin-top: 20%;
        }

        .form-part {
            width: 50%;
            height: 100vh;
            position: relative;
        }

        .form {
            width: 50%;
            height: 80vh;
            border: 2px solid rgb(75, 74, 74);
            border-radius: 10px;
            position: absolute;
            top: 10%;
            left: 25%;
        }

        .login-text {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color: black;
            text-align: center;
            font-size: 22px;
            font-weight: 600;
        }

        form {
            padding: 6px;
        }

        .credentials {
            padding-top: 28px;
            padding-left: 16px;
            padding-right: 16px;
        }

        .email {
            padding-top: 14px;
        }

        .password {
            padding-top: 14px;
        }

        .password_confirmation {
            padding-top: 14px;
        }

        label {
            display: block;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 14px;
            color: #333;
            margin-bottom: 6px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px 12px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 6px;
            outline: none;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #003240;
        }

        input[type="text"]::placeholder,
        input[type="password"]::placeholder, {
            color: #999;
        }
        button{
            outline: none;
            border: 1px solid #003240;
            background-color: #003240;
            color: white;
            padding: 8px;
            width: 7vw;
            margin-top: 22px;
            border-radius: 8px;
            margin-left: 7vw;
        }
        button:hover{
            cursor: pointer;
        }
        .register{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            text-align: center;
            margin-top: 22px;
        }
        a{
            text-decoration: none;
            color: #003240;
        }
        a:hover{
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="image-part">
            <p class="intro">Create your account, create your voice.</p>
        </div>
        <div class="form-part">
            <div class="form">
                <form action="{{route('registerUser')}}" method="post">
                    @csrf
                    <p class="login-text">Register Yourself</p>
                    <div class="credentials">
                        <div class="name">
                            <label for="name">Enter Full name</label>
                            <input type="text" name="name" placeholder="Enter your Name">
                        </div>
                        <div class="email">
                            <label for="email">Enter Email</label>
                            <input type="text" name="email" placeholder="Enter your Email">
                        </div>
                        <div class="password">
                            <label for="password">Enter Password</label>
                            <input type="password" name="password" placeholder="Enter your Password">
                        </div>
                        <div class="password_confirmation">
                            <label for="password">Confirm Password</label>
                            <input type="password" name="password_confirmation" placeholder="Re-enter your Password">
                        </div>
                       <button type="submit">Register</button>
                    </div>
                </form>
                <p class="register">Account Registered? <a href="{{route('loginForm')}}">Login Now</a></p>
            </div>
        </div>
    </div>
</body>
</html>