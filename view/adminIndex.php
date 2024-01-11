<?php
include '../model/dbConnection.php';

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Define the correct security key
$correctSecurityKey = "12345678";

// Check if the unfiltered button is clicked and the security key is provided
if (isset($_GET['unfiltered']) && isset($_POST['security_key']) && $_POST['security_key'] === $correctSecurityKey) {
    $maskedMode = false; // If the security key is correct, allow unfiltered view
} else {
    $maskedMode = true; // Default mode is masked
}

// Select all records from the members table excluding the 'id' field
$sql = "SELECT lastname, firstname, middlename, completeaddress, contactnumber, emailaddress, gender, dateofbirth, placeofbirth, civilstatus, spousename, numberofchildren, membershiptype, yearsattending, ministry FROM members";
$result = mysqli_query($connection, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" sizes="1920x1920" href="../images/logo.png">
    <link rel="icon" href="/path/to/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Member Records</title>
</head>

<body class="bg-light">
    <div class="container mt-5">
        <?php if ($maskedMode) { ?>
            <form action="?unfiltered" method="post">
                <?php if (isset($_POST['show_security_key'])) { ?>
                    <div class="mb-3">
                        <label for="security_key" class="form-label">Enter Security Key:</label>
                        <input type="password" class="form-control" id="security_key" name="security_key" required>
                    </div>
                <?php } else { ?>
                    <input type="hidden" name="show_security_key" value="0">
                <?php } ?>
                <button type="submit" class="btn btn-primary">Unmask</button>
            </form>
        <?php } else { ?>
            <div class="mb-3">
                <a href="?unfiltered" class="btn btn-primary">Mask</a>
            </div>
        <?php } ?>

        <?php if ($result && mysqli_num_rows($result) > 0) { ?>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Complete Address</th>
                            <th>Contact Number</th>
                            <th>Email Address</th>
                            <th>Gender</th>
                            <th>Date of Birth</th>
                            <th>Place of Birth</th>
                            <th>Civil Status</th>
                            <th>Name of Spouse</th>
                            <th>Number of Children</th>
                            <th>Type of Membership</th>
                            <th>Years Attending</th>
                            <th>Ministry</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $rowNumber = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?php echo $rowNumber++; ?></td>
                                <?php
                                // Loop through each field and display masked or unmasked data
                                foreach ($row as $field => $value) {
                                    echo '<td>';
                                    echo $maskedMode ? maskData($value) : $value;
                                    echo '</td>';
                                }
                                ?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        <?php } else { ?>
            <p>No records found</p>
        <?php } ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>

<?php
// Close the connection
mysqli_close($connection);
?>

<?php
// Function to mask data, showing only the first and last characters
function maskData($data)
{
    if (strlen($data) <= 2) {
        return $data; // If the data is 2 characters or less, don't mask
    }

    // Extract the first and last characters
    $firstChar = substr($data, 0, 1);
    $lastChar = substr($data, -1);

    // Create a string with the first character, masked characters, and last character
    return $firstChar . str_repeat('*', strlen($data) - 2) . $lastChar;
}
?>
