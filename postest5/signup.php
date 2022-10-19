<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign UP</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <div class="kotak-signup">
        <p class="tulisan-signup">Sign Up</p>
        <form action="tambah.php" method="POST">
            <label for="email">Your email</label>
            <input type="email" class="form-signup" id="email" name="email" placeholder="Masukan email anda..">
            <br>
            <label for="fname">$username</label>
            <input type="text" class="form-signup" id="fname" name="fname" placeholder="First Name..">
            <br>
            <label for="Phone">Phone</label>
            <input type="text" class="form-signup" id="phone" name="phone" placeholder="Phone..">
            <br>
            <label for="date">Your Date</label>
            <input type="date" class="form-signup" id="date" name="dte" placeholder="date">
            <label for="pwd">Password</label>
            <input type="password" class="form-signup" id="pwd" name="pwd" placeholder="Password..">
            <br>
            <input type="submit" class="tombol-signup" name="Sign-up" value="SUBMIT">

        </form>
    </div>

</body>

</html>