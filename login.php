<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bossbaby Exchange - Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            display: flex;
            max-width: 900px;
            width: 100%;
            background-color: #111;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(255, 215, 0, 0.3);
        }

        .image-col {
            flex: 1;
            background: url('./img/Digital wallet illustration.jpeg') no-repeat center center;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .image-col img {
            max-width: 100%;
            height: auto;
        }

        .form-col {
            flex: 1;
            padding: 2rem;
        }

        .form-col h2 {
            color: gold;
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .form-col form {
            display: flex;
            flex-direction: column;
        }

        .form-col input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid gold;
            border-radius: 5px;
            background: #222;
            color: #fff;
        }

        .form-col button {
            width: 100%;
            padding: 10px;
            background-color: gold;
            color: #000;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            margin-top: 1rem;
        }

        .form-col button:hover {
            background-color: #fff;
        }

        .form-col p {
            text-align: center;
            margin-top: 1rem;
        }

        .form-col p a {
            color: gold;
            text-decoration: none;
        }

        .form-col p a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .image-col {
                height: 250px;
                background-size: cover;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Image Column -->
        <div class="image-col"></div>

        <!-- Login Form Column -->
        <div class="form-col">
            <h2>Login</h2>
            <form action="login_process.php" method="POST">
                <input type="email" name="email" placeholder="Email Address" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
            <p>Don't have an account? <a href="signup.html">Sign Up</a></p>
        </div>
    </div>
</body>

</html>
