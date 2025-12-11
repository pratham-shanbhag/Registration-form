<!DOCTYPE html>
<html>

<head>
    <title>Registration Details</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Registration Details</h2>

        <?php
        echo "<p><strong>Full Name:</strong> " . $_POST['fullname'] . "</p>";
        echo "<p><strong>Email:</strong> " . $_POST['email'] . "</p>";
        echo "<p><strong>Phone:</strong> " . $_POST['phone'] . "</p>";
        echo "<p><strong>Gender:</strong> " . $_POST['gender'] . "</p>";
        echo "<p><strong>Date of Birth:</strong> " . $_POST['dob'] . "</p>";
        echo "<p><strong>Address:</strong> " . $_POST['address'] . "</p>";
        echo "<p><strong>Course Applied for:</strong> " . $_POST['course'] . "</p>";
        ?>
    </div>
</body>

</html>
