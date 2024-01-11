<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" sizes="1920x1920" href="../images/logo.png">
    <link rel="icon" href="/path/to/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Add these links to your head section -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/css/selectize.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/js/standalone/selectize.min.js"></script>

    <style>
        body::before {
            content: '';
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
            z-index: -1;
        }

        .container {
            margin-top: 50px;
        }

        form {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            filter: brightness(90%);
        }
    </style>
    <title>GHCCI</title>
</head>

<body class="vh-100 overfloww-hidden">
    <div class="container mt-5 d-flex justify-content-center">
        <form action="../controller/membership_process.php" method="post" class="w-md-75 mx-auto">

            <!-- Last Name -->
            <div class="mb-3">
                <label for="lastName" class="form-label">Last Name:</label>
                <input type="text" class="form-control" id="lastName" name="lastname" required>
            </div>

            <!-- First Name -->
            <div class="mb-3">
                <label for="firstName" class="form-label">First Name:</label>
                <input type="text" class="form-control" id="firstName" name="firstname" required>
            </div>

            <!-- Middle Name -->
            <div class="mb-3">
                <label for="middleName" class="form-label">Middle Name:</label>
                <input type="text" class="form-control" id="middleName" name="middlename" required>
            </div>

            <!-- Complete Address -->
            <div class="mb-3">
                <label for="completeAddress" class="form-label">Complete Address:</label>
                <input type="text" class="form-control" id="completeAddress" name="completeaddress" required>
            </div>

            <!-- Contact Number -->
            <div class="mb-3">
                <label for="contactNumber" class="form-label">Contact Number:</label>
                <input type="tel" class="form-control" id="contactNumber" name="contactnumber">
            </div>

            <!-- Email Address -->
            <div class="mb-3">
                <label for="emailAddress" class="form-label">Email Address:</label>
                <input type="email" class="form-control" id="emailAddress" name="emailaddress">
            </div>

            <!-- Gender -->
            <div class="mb-3">
                <label for="gender" class="form-label">Gender:</label>
                <select class="form-select" id="gender" name="gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>

            <!-- Date of Birth -->
            <div class="mb-3">
                <label for="dob" class="form-label">Date of Birth:</label>
                <input type="date" class="form-control" id="dob" name="dateofbirth" required>
            </div>

            <!-- Place of Birth -->
            <div class="mb-3">
                <label for="placeOfBirth" class="form-label">Place of Birth:</label>
                <input type="text" id="placeOfBirth" name="placeofbirth" required>
            </div>

            <!-- Civil Status -->
            <div class="mb-3">
                <label for="civilStatus" class="form-label">Civil Status:</label>
                <select class="form-select" id="civilStatus" name="civilstatus" required>
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                    <option value="widow">Widow</option>
                </select>
            </div>

            <!-- If Married, Name of Spouse -->
            <div class="mb-3">
                <label for="spouseName" class="form-label">Name of Spouse:</label>
                <input type="text" class="form-control" id="spouseName" name="spousename">
            </div>

            <!-- If with Child/Children, Number of Children -->
            <div class="mb-3">
                <label for="numberOfChildren" class="form-label">Number of Children:</label>
                <input type="number" class="form-control" id="numberOfChildren" name="numberofchildren">
            </div>

            <!-- Type of Membership -->
            <div class="mb-3">
                <label for="membershipType" class="form-label">Type of Membership:</label>
                <select class="form-select" id="membershipType" name="membershiptype" required>
                    <option value="newMember">New Member</option>
                    <option value="oldMember">Old Member</option>
                </select>
            </div>

            <!-- Years Attending Glorious Hope -->
            <div class="mb-3">
                <label for="yearsAttending" class="form-label">How many years have you been attending Glorious Hope?</label>
                <select class="form-select" id="yearsAttending" name="yearsattending" required>
                    <option value="1-3">1 - 3 years</option>
                    <option value="5-6">5 - 6 years</option>
                    <option value="7-10">7 - 10 years</option>
                    <option value="10-15">10 - 15 years</option>
                    <option value="16-20">16 - 20 years</option>
                    <option value="20-25">20 - 25 years</option>
                    <option value="25-30">25 - 30 years</option>
                    <option value="31 and above">31 years and above</option>
                </select>
            </div>

            <!-- Ministry -->
            <div class="mb-3">
                <label for="ministry" class="form-label">Ministry:</label>
                <select class="form-select" id="ministry" name="ministry" required>
                    <option value="boardOfCouncil">Board of Council</option>
                    <option value="ministryHeadAssistant">Ministry Head/Assistant</option>
                    <option value="worshipMinistry">Worship Ministry (Team David)</option>
                    <option value="usheringMinistry">Ushering Ministry</option>
                    <option value="intercessoryMinistry">Intercessory Ministry</option>
                    <option value="marthaMinistry">Martha Ministry</option>
                    <option value="kids4JesusTeacherAssistant">Kids4Jesus Teacher/Assistant</option>
                    <option value="creatives">Creatives</option>
                    <option value="multimedia">Multimedia</option>
                    <option value="specialEvents">Special Events</option>
                    <option value="drivingMinistry">Driving Ministry</option>
                    <option value="noneAsOfNow">None as of now</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>


    <script>
        $(document).ready(function() {
            $('#placeOfBirth').selectize({
                create: true,
                sortField: 'text'
            });
        });
    </script>
</body>

</html>