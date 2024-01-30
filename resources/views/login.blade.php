<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
  @import url('https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #ffffff;
        }

        .login{
            width: 400px;
        }

        form {
            width: 250px;
            margin: 60px auto;
        }

        h1 {
            margin: 20px;
            text-align: center;
            font-weight: bolder;
            text-transform: uppercase;
        }

        hr {
            border-top: 2px solid #000000;
        }

        p {
            text-align: center;
            margin: 10px;
        }

        .left img {
            width: 450px;
            height: 100%px;
            border-top-right-radius: 15px;
            border-bottom-right-radius: 15px;
        }

        form label {
            display: block;
            font-size: 16px;
            font-weight: 600;
            padding: 5px;
            font-family: "Be Vietnam Pro";
            
        }


        input {
            width: 100%;
            margin: 2px;
            border: none;
            outline: none;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid gray;
        }

        button {
            border: none;
            outline: none;
            padding: 8px;
            width: 252px;
            color: #ffffff;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
            border-radius: 5px;
            background: #000000;
        }

        button:hoven {
            background: rgba(214, 86, 64, 1);
        }
</style>
<title>SJP</title>
</head>
<body>
<div class="container">
    <div class="login">
        <form action="">
            <h1>LOGIN</h1>
            <hr>
            <p></p>
            <label for="exampleFormControlInput1" class="form-label">Username :</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Username or email">
            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
            <ellipse cx="11.3419" cy="5.83145" rx="3.557" ry="2.88839" fill="black"/>
            <path d="M5.25213 13.2289C5.77074 10.6775 8.44483 9.44196 11.0483 9.44196H11.6355C14.239 9.44196 16.9131 10.6775 17.4317 13.2289C17.4501 13.3191 17.4668 13.4099 17.4818 13.5012C17.5713 14.0462 17.119 14.4966 16.5667 14.4966H6.11719C5.5649 14.4966 5.11257 14.0462 5.20204 13.5012C5.21702 13.4099 5.23378 13.3191 5.25213 13.2289Z" fill="black"/>
            </svg>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
    </div>
    <div class="right">
    </div>
</div>
</body>
</html>
