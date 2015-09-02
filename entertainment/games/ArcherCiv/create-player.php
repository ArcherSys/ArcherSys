 <?php

    require_once 'gamerocket/lib/GameRocket.php';

    GameRocket_Configuration::environment('production');
    GameRocket_Configuration::apiKey('6c16df9febf142bf8eb3891c3255ae7d');
    GameRocket_Configuration::secretKey('d94931fd34c247e19cc605cfe5a4a22b');

    $result = GameRocket_Player::create(array(
        'name' => $_POST["name"],
        'locale' => $_POST["locale"]
    ));

    if ($result->success) {
        print_r("success!: " . $result->player->id);
    } else {
        print_r("Validation errors: \n");
        print_r($result->errors->deepAll());
    }

    ?>

