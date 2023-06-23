<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>HTML FORM</title>
</head>

<body>
    <h1>HTML FORM</h1>
    <form action="connect.php" method="post">
        <h2>Name</h2>
        <input type="text" name="name" placeholder="Enter your name">
        <h2>Email</h2>
        <input type="email" name="email" placeholder="Enter your email">
        <div class="gender">
            <label style="font-weight: bold; ">Gender</label>
            <input type="radio" name="gender" value="m"> <label>Male</label>
            <input type="radio" name="gender" value="f"> <label>Female</label>
            <input type="radio" name="gender" value="o"> <label>Other</label>
        </div>
        <h2>Mobile</h2>
        <input type="text" name="mobile" placeholder="Enter your mobile">

        <h2>Password</h2>
        <input type="password" name="password" placeholder="Enter your Password">
        <div class="btn">
            <button type="submit">submit data</button>
        </div>


    </form>

</body>

</html>