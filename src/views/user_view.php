<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
</head>

<body>
    <h1><?php echo htmlspecialchars($userData['name']); ?></h1>
    <p>Email: <?php echo htmlspecialchars($userData['email']); ?></p>
</body>

</html>