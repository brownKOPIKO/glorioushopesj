<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" sizes="1920x1920" href="../images/logo.png">
    <link rel="icon" href="/path/to/favicon.ico" type="image/x-icon">
    <title>Admin Login</title>
    <style>
        body {
            background: url('../images/b5.jpg') no-repeat center fixed;
            background-size: cover;
            font-family: 'Gasoek One', sans-serif;
            /* Apply background blur */
            backdrop-filter: blur(5px);
        }

        .container-fluid {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-form {
            width: 100%;
            max-width: 400px;
            background: white;
            padding: 20px;
            backdrop-filter: blur(0px) saturate(180%);
            -webkit-backdrop-filter: blur(0px) saturate(180%);
            background-color: rgba(255, 255, 255, 0.75);
            border-radius: 12px;
            border: 1px solid rgba(209, 213, 219, 0.18);
        }

        .logo {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container-fluid">
        <form class="login-form" action="../controller/adminLoginController.php" method="post">
            <div class="logo">
                <img src="../images/logo.png" alt="Logo" height="40">
            </div>
            <h2 class="mb-4 text-center">Admin Login</h2>

            <?php
            // Check if there is an error message
            if (isset($_GET['error'])) {
                echo '<div class="alert alert-danger" role="alert">' . $_GET['error'] . '</div>';
            }
            ?>

            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
            <div class="mt-3 text-center">
                <a href="../index.html">Back to Homepage</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>