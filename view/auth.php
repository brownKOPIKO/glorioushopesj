<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Include your head content -->
    <title>Membership</title>
</head>

<body>
    <!-- Your membership content goes here -->

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Include your custom script -->
    <script>
        $(document).ready(function () {
    // Prompt the user for the security key
    var enteredKey = prompt("Enter the security key:");

    // Check if the entered key is correct
    if (enteredKey !== null && enteredKey === "123456") {
        // If correct, do nothing (allow access)
        window.location.href = "membership.php";
    } else {
        // If incorrect or canceled, redirect to an error page or display an error message
        alert("Invalid security key!!");
        window.location.href = "../index.html"; // Change this to your error page
    }
});

    </script>
</body>

</html>
