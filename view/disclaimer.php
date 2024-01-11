<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Disclaimer</title>
    <link rel="icon" sizes="1920x1920" href="../images/logo.png">
    <link rel="icon" href="/path/to/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        .background-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('../images/b1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            filter: blur(5px);
        }

        body {
            font-family: 'Sofia Pro', 'Arial', sans-serif;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            max-width: 500px;
            text-align: center;
        }

        .card {
            border: 2px solid #007bff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background: rgba(255, 255, 255, 0.9);
        }

        .card-title {
            color: #007bff;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .btn-primary:hover,
        .btn-secondary:hover {
            filter: brightness(90%);
        }
    </style>
</head>

<body>
    <div class="background-container"></div>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title text-center mb-4">Disclaimer</h1>
                <p class="card-text">
                Thank you for expressing your interest in becoming a member of Glorious Hope Christian Center Int'l San Jose. Before you proceed with the membership process, please make sure that you have been attending the service for at least 6 months.
                </p>
                <div class="text-center">
                    <button class="btn btn-primary" onclick="redirectToMembership()">Yes</button>
                    <button class="btn btn-secondary" onclick="redirectToIndex()">No</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS script (needed for Bootstrap features) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>
        function redirectToMembership() {
            // Redirect to membership.php if the user clicks OK
            window.location.href = 'auth.php';
        }

        function redirectToIndex() {
            // Redirect back to index.php if the user clicks Cancel
            window.location.href = '../index.html';
        }
    </script>
</body>

</html>
