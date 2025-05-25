<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use App\Model\User;
use App\Helpers\Navigate;
use App\Service\Guard;

Guard::only_guest();
?>

<main>
    <div class="container">
        <h1 class="fs40 mb32"><?php echo $data['text']['sign_in'] ?></h1>
        <form class="form-1 mb60" method="post" action="<?php Navigate::view("public/login") ?>">
            <input required class="mb8" type="text" name="login" placeholder="<?php echo $data['text']['name_or_email'] ?>">
            <input required class="mb8" type="password" name="password" placeholder="*******">
            <button class="btn-1 fs24 mb8" name="submit"><?php echo $data['text']['sign_in'] ?></button>
            <a href="<?php Navigate::view("public/reset_password") ?>" class="btn-1 fs16"><?php echo $data['text']['forgot'] ?></a>
                <?php

                if (isset($_POST['submit'])) {

               
                $user = User::query(
                    get: ["*"],
                    fetch_mode: "one",
                    params: [
                        ["name", "=", $_POST['login'], 'value','OR'],
                        ["email", "=", $_POST['login'], 'value'],
                    ]
                );
 
                if (
                    $user &&
                    password_verify($_POST['password'], $user['password_hash'])
                ) {
                    $_SESSION['auth'] = [
                        'role' => $user['role'],
                        'id' => $user['id'],
                        'email' => $user['email']
                    ];
                    if ($user['role'] == 'user' || $user['role'] =='vip') {
                        Navigate::view("user/profile?id=". $user['id'], mode:"redirect");
                    }
                    // else {
                    //     Navigate::view('admin/panel', mode:'redirect');
                    // }
                }
             ?> <p class="failed_message bold"><?php echo "Неправильный логин/пароль"; ?> </p> <?php }?>
        </form>
    </div>
</main>

