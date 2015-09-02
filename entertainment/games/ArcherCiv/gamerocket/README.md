# GameRocket PHP Client Library

The GameRocket PHP library provides integration access to the GameRocket platform.

## Dependencies

PHP version >= 5.2.1 required.

The following PHP extensions are required:

* curl
* hash
* openssl

## Quick Start Example

    <?php

    require_once 'PATH_TO_GAMEROCKET/lib/GameRocket.php';

    GameRocket_Configuration::environment('production');
    GameRocket_Configuration::apiKey('your_api_key');
    GameRocket_Configuration::secretKey('your_secret_key');

    $result = GameRocket_Player::create(array(
        'name' => 'the_player_name',
        'locale' => 'fr_FR'
    ));

    if ($result->success) {
        print_r("success!: " . $result->player->id);
    } else {
        print_r("Validation errors: \n");
        print_r($result->errors->deepAll());
    }

    ?>

## Documentation

 * [Official documentation](https://www.gamerocket.io/docs/php/sdk/)

## License

See the LICENSE file.
