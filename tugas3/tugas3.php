<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login Form With PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="center">
        <h1>Biodata</h1>
        <form method="post" action="tugas3postAct.php">
            <div class="txt_field">
                <input type="text" name="nama" required >
                <span></span>
                <label>Nama</label>
            </div>
            <div class="txt_field">
                <input type="text" name="email" required>
                <span></span>
                <label>Email</label>
            </div>
            <div class="txt_field">
                <input type="text" name="alamat" required>
                <span></span>
                <label>Alamat</label>
            </div>
            <div class="txt_field">
                <input type="number" name="umur" required>
                <span></span>
                <label>Umur</label>
            </div>

            <input type="submit" value="Submit">
        </form>
    </div>

</body>

</html>