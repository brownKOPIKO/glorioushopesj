<?php
include '../model/dbConnection.php';

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Non-hashed sensitive information
    $lastName = mysqli_real_escape_string($connection, $_POST['lastname']);
    $firstName = mysqli_real_escape_string($connection, $_POST['firstname']);
    $middleName = mysqli_real_escape_string($connection, $_POST['middlename']);
    $completeAddress = mysqli_real_escape_string($connection, $_POST['completeaddress']);
    $contactNumber = mysqli_real_escape_string($connection, $_POST['contactnumber']);
    $emailAddress = mysqli_real_escape_string($connection, $_POST['emailaddress']);
    $placeOfBirth = mysqli_real_escape_string($connection, $_POST['placeofbirth']);
    $spouseName = mysqli_real_escape_string($connection, $_POST['spousename']);

    // Other non-sensitive information
    $gender = mysqli_real_escape_string($connection, $_POST['gender']);
    $dateOfBirth = mysqli_real_escape_string($connection, $_POST['dateofbirth']);
    $civilStatus = mysqli_real_escape_string($connection, $_POST['civilstatus']);
    $numberOfChildren = mysqli_real_escape_string($connection, $_POST['numberofchildren']);
    $membershipType = mysqli_real_escape_string($connection, $_POST['membershiptype']);
    $yearsAttending = mysqli_real_escape_string($connection, $_POST['yearsattending']);
    $ministry = mysqli_real_escape_string($connection, $_POST['ministry']);

    // Use prepared statements
    $stmt = $connection->prepare("INSERT INTO members (
        lastname, firstname, middlename, completeaddress, contactnumber, emailaddress, gender, dateofbirth, placeofbirth,
        civilstatus, spousename, numberofchildren, membershiptype, yearsattending, ministry
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("sssssssssssssss", $lastName, $firstName, $middleName, $completeAddress, $contactNumber, $emailAddress,
        $gender, $dateOfBirth, $placeOfBirth, $civilStatus, $spouseName, $numberOfChildren,
        $membershipType, $yearsAttending, $ministry);

    if ($stmt->execute()) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    header('Location: ../view/admin.php');
    exit();
}

mysqli_close($connection);
?>
