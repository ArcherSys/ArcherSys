<?php
$content   = array (
  'Archos' => 
  array (
    'regex' => 'Archos.*GAMEPAD([2]?)',
    'device' => 'console',
    'model' => 'Gamepad $1',
  ),
  'Microsoft' => 
  array (
    'regex' => 'Xbox',
    'device' => 'console',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'Xbox One',
        'model' => 'Xbox One',
      ),
      1 => 
      array (
        'regex' => 'Xbox',
        'model' => 'Xbox 360',
      ),
    ),
  ),
  'Nintendo' => 
  array (
    'regex' => 'Nintendo (([3]?DS[i]?)|Wii[U]?)',
    'device' => 'console',
    'model' => '$1',
  ),
  'OUYA' => 
  array (
    'regex' => 'OUYA',
    'device' => 'console',
    'model' => 'OUYA',
  ),
  'Sega' => 
  array (
    'regex' => 'Dreamcast',
    'device' => 'console',
    'model' => 'Dreamcast',
  ),
  'Sony' => 
  array (
    'regex' => 'PlayStation (3|4|Portable|Vita)',
    'device' => 'console',
    'model' => 'PlayStation $1',
  ),
);
$expires_on   = 1418308847;
$cache_complete   = true;
?>