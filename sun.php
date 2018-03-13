
  <?php
    register("1234");
    function register($password) {
    $hash = password_hash($password, PASSWORD_BCRYPT);
    echo $hash;
    }
//$2y$10$fCj/B3ybxHSZ1valmHIJ7OARY9vHbredtZxoc8YQ6ceBkprF/459G
    // function login($password) {
    // $hash = loadHashByUsername($username);
    // if (password_verify('1234','$2y$10$fCj/B3ybxHSZ1valmHIJ7OARY9vHbredtZxoc8YQ6ceBkprF/459G')) {
    //     //login
    //     echo 'login';
    // } else {
    //     // failure
    //     echo 'fail';
    // }
// }
    ?>



