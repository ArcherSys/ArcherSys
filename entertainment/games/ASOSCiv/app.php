

    <?php

    require_once 'vendor/workbandits/gamerocket-php/lib/GameRocket.php';

    GameRocket_Configuration::environment('production');
    GameRocket_Configuration::apiKey('your_api_key');
    GameRocket_Configuration::secretKey('your_secret_key');

    $result = GameRocket_Player::create(array(
        'name' => $_POST["Name"],
        'locale' => 'en_US'
    ));

    if ($result->success) {
        print_r("success!: " . $result->player->id);
    } else {
        print_r("Validation errors: \n");
        print_r($result->errors->deepAll());
    }

    ?>