<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Include your head content -->
    <title>Admin verification</title>
</head>

<body>
    <!-- Your membership content goes here -->

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Include your custom script -->
    <script>
        $(document).ready(function () {
    // Prompt the user for the security key
    var enteredKey = prompt("Enter the verification code:");

    // Check if the entered key is correct
    if (enteredKey !== null && enteredKey === "123456789") {
        // If correct, do nothing (allow access)
        window.location.href = "adminIndex.php";
    } else {
        // If incorrect or canceled, redirect to an error page or display an error message
        alert("Invalid verification code!!");
        window.location.href = "../index.html"; // Change this to your error page
    }
});

    </script>
</body>

</html>
