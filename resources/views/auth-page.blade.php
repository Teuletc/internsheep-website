
<!DOCTYPE html>
<html>
<head>
	    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internsheep</title>

    <link rel="stylesheet" href="{{ asset('css/auth-page-style.css')}}">
    <link rel="icon" type="icon-internsheep" href="../imgs/icon-internsheep.png" sizes="32x32">

    <script src="" defer></script>
        <!-- PWA  -->
<meta name="theme-color" content="#6777ef"/>
<link rel="apple-touch-icon" href="{{ asset('icon-internsheep.png') }}">
<link rel="manifest" href="{{ asset('/manifest.json') }}">

</head>
<body>
    <div class="hero-logo"></div>
    <div class="login-box">
        <h2>Login</h2>
        <form method="POST">
          <div class="user-box">
            <input type="text" name="" required="">
            <label>Username</label>
          </div>
          <div class="user-box">
            <input type="password" name="" required="">
            <label>Password</label>
          </div>
          <a href="admin-companie">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Submit
          </a>
        </form>
    </div>

    <script src="{{ asset('/sw.js') }}"></script>
<script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then(function (reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
</script>

</body>
</html>
