<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login Form With PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="center">
        <h1>Login</h1>
        <form method="post" action="tugas2postAct.php">
            <div class="txt_field">
                <input type="text" name="nama" >
                <span></span>
                <label>Nama</label>
            </div>
            <div class="txt_field">
                <input type="text" name="email" >
                <span></span>
                <label>Email</label>
            </div>
            <input type="submit" value="Login">
        </form>
    </div>

</body>

</html>