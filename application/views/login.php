<!DOCTYPE html>
<html>

<head>
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>assets/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>mycss/my.css">
    <title>Login Form Using HTML And CSS Only</title>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-in-container">
            <form>
                <h1>Sign in</h1><br><br>
                <!-- <div class="alert">
                    <strong>Failed!</strong> Username or Password wrong.
                </div> -->
                <input name="username" class="username" type="text" placeholder="Username" />
                <input name="password" class="password" type="password" placeholder="Password" /><br><br>
                <button type="button" name="login" class="btnlogin">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>Welcome!</h1>
                    <p>Enter your account details to get access to the <strong>Admin</strong> page</p>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="<?= base_url('assets/myjs/') ?>my.js"></script>
</html>