<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry</title>
    <link rel="stylesheet" href="/csslaundry/login.css">
</head>

<body>
    <div class="container">
        <div class="login">
            <form action="{{ route('login') }}" class="form" method="POST">
                @csrf
                <h1>Login</h1>
                <hr>
                <p>Admin-Karyawan</p>
                <label for="">Email</label>
                <input type="text" name="email" placeholder="Masukkan Username Anda">
                <label for="">Password</label>
                <input type="password" name="password" placeholder="Masukkan Password Anda">
                <button type="submit">Login</button>
            </form>
        </div>
        <div class="right">
            <img src="/img/UKK.jpg" alt="">
        </div>
    </div>
</body>

</html>
