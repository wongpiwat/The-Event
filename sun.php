<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <?php
    register("1234");
    function register($password) {
    $hash = password_hash($password, PASSWORD_BCRYPT);
    echo
    }

    function login($username, $password) {
    $hash = loadHashByUsername($username);
    if (password_verify($password, $hash)) {
        //login
    } else {
        // failure
    }
    ?>
}
    <script>

</body>
</html>