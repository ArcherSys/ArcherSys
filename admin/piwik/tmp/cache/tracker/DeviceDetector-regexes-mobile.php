<?php
$content   = array (
  'HTC' => 
  array (
    'regex' => 'HTC|Sprint (?:APA|ATP)|ADR[a-z0-9]+|NexusHD2|Amaze[ _]4G Build|(?:Sensation|Desire|Evo ?3D|One)[ _][a-z0-9]+ Build',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'NexusHD2',
        'model' => 'HD2',
      ),
      1 => 
      array (
        'regex' => 'HTC[ _-]((?:Flyer|P715a).*) Build',
        'device' => 'tablet',
        'model' => '$1',
      ),
      2 => 
      array (
        'regex' => 'HTC[ _]([^/;]+) [0-9]+(?:\\.[0-9]+)+ Build',
        'model' => '$1',
      ),
      3 => 
      array (
        'regex' => 'HTC[ _]([^/;]+) Build',
        'model' => '$1',
      ),
      4 => 
      array (
        'regex' => 'HTC[ _]([a-z0-9]+[ _-]?(?:[a-z0-9_+-]+)?)',
        'model' => '$1',
      ),
      5 => 
      array (
        'regex' => 'USCCHTC(\\d+)',
        'model' => '$1',
      ),
      6 => 
      array (
        'regex' => 'Sprint (ATP.*) Build',
        'device' => 'tablet',
        'model' => '$1 (Sprint)',
      ),
      7 => 
      array (
        'regex' => 'Sprint (APA.*) Build',
        'model' => '$1 (Sprint)',
      ),
      8 => 
      array (
        'regex' => 'HTC(?:[\\-/ ])?([a-z0-9-_]+)',
        'model' => '$1',
      ),
      9 => 
      array (
        'regex' => 'HTC;(?: )?([a-z0-9 ]+)',
        'model' => '$1',
      ),
      10 => 
      array (
        'regex' => '(Desire[ _][a-z0-9]+|Amaze[ _]4G|Sensation[ _][a-z0-9]+|Evo ?3D[ _][a-z0-9]+|One ?[XELSV\\+]*) Build',
        'model' => '$1',
      ),
      11 => 
      array (
        'regex' => '(ADR.+) Build',
        'model' => '$1',
      ),
      12 => 
      array (
        'regex' => '(ADR[a-z0-9]+)',
        'model' => '$1',
      ),
    ),
  ),
  'Nokia' => 
  array (
    'regex' => 'Nokia|Lumia|Maemo RX|portalmmm/2\\.0 N7|portalmmm/2\\.0 NK|nok[0-9]+|Symbian.*\\s([a-z0-9]+)$',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'NokiaInternal|Nokia-WAP-Toolkit|Nokia-MIT-Browser|Nokia Mobile|Nokia Browser|Nokia/Series',
        'model' => '',
      ),
      1 => 
      array (
        'regex' => 'Nokia(N[0-9]+)',
        'model' => '$1',
      ),
      2 => 
      array (
        'regex' => 'Nokia-([a-z0-9]+)',
        'model' => 'N$1',
      ),
      3 => 
      array (
        'regex' => 'NOKIA; ([a-z0-9\\- ]+)',
        'model' => '$1',
      ),
      4 => 
      array (
        'regex' => 'NOKIA[ ]?([a-z0-9\\-]+)',
        'model' => '$1',
      ),
      5 => 
      array (
        'regex' => 'NOKIA/([a-z0-9 ]+)',
        'model' => '$1',
      ),
      6 => 
      array (
        'regex' => '(Lumia [a-z0-9\\-]+)',
        'model' => '$1',
      ),
      7 => 
      array (
        'regex' => 'Maemo RX-51 ([a-z0-9]+)',
        'model' => '$1',
      ),
      8 => 
      array (
        'regex' => 'Maemo RX-34',
        'model' => 'N800',
      ),
      9 => 
      array (
        'regex' => 'portalmmm/2\\.0 (N7[37]|NK[a-z0-9]+)',
        'model' => '$1',
      ),
      10 => 
      array (
        'regex' => 'nok([0-9]+)',
        'model' => '$1',
      ),
      11 => 
      array (
        'regex' => 'Symbian.*\\s([a-z0-9]+)$',
        'device' => 'feature phone',
        'model' => '$1',
      ),
    ),
  ),
  'CnM' => 
  array (
    'regex' => 'CnM',
    'device' => 'tablet',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'CnM[ \\-](?:Touchpad|TP)[ \\-]([0-9\\.]+)',
        'model' => 'Touchpad $1',
      ),
    ),
  ),
  'RIM' => 
  array (
    'regex' => 'BB10;|BlackBerry|rim[0-9]+|PlayBook',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'BB10; ([a-z0-9\\- ]+)\\)',
        'model' => 'BlackBerry $1',
      ),
      1 => 
      array (
        'regex' => 'PlayBook.+RIM Tablet OS',
        'model' => 'BlackBerry Playbook',
        'device' => 'tablet',
      ),
      2 => 
      array (
        'regex' => 'BlackBerry(?: )?([a-z0-9]+)',
        'model' => 'BlackBerry $1',
      ),
      3 => 
      array (
        'regex' => 'rim([0-9]+)',
        'model' => 'BlackBerry $1',
      ),
      4 => 
      array (
        'regex' => 'BlackBerry',
        'model' => 'BlackBerry',
      ),
    ),
  ),
  'Palm' => 
  array (
    'regex' => '(?:Pre|Pixi)/(\\d+)\\.(\\d+)|Palm|Treo|Xiino',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => '((?:Pre|Pixi))/(\\d+\\.\\d+)',
        'model' => '$1 $2',
      ),
      1 => 
      array (
        'regex' => 'Palm(?:[ -])?((?!OS|Source)[a-z0-9]+)',
        'model' => '$1',
      ),
      2 => 
      array (
        'regex' => 'Treo([a-z0-9]+)',
        'model' => 'Treo $1',
      ),
      3 => 
      array (
        'regex' => 'Tungsten',
        'model' => 'Tungsten',
      ),
      4 => 
      array (
        'regex' => 'Xiino',
        'model' => '',
      ),
    ),
  ),
  'HP' => 
  array (
    'regex' => 'TouchPad/\\d+\\.\\d+|hp-tablet|HP ?iPAQ|webOS.*P160U|HP Slate',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'HP Slate ?(.+) Build',
        'model' => 'Slate $1',
        'device' => 'tablet',
      ),
      1 => 
      array (
        'regex' => 'HP Slate ?([0-9]+)',
        'model' => 'Slate $1',
        'device' => 'tablet',
      ),
      2 => 
      array (
        'regex' => 'TouchPad/(\\d+\\.\\d+)|hp-tablet',
        'model' => 'TouchPad',
        'device' => 'tablet',
      ),
      3 => 
      array (
        'regex' => 'HP(?: )?iPAQ(?: )?([a-z0-9]+)',
        'model' => 'iPAQ $1',
      ),
      4 => 
      array (
        'regex' => 'webOS.*(P160U)',
        'model' => 'Veer',
      ),
    ),
  ),
  'TiPhone' => 
  array (
    'regex' => 'TiPhone ?([a-z0-9]+)',
    'device' => 'smartphone',
    'model' => '$1',
  ),
  'Apple' => 
  array (
    'regex' => 'AppleTV|iPad|iPod|iPhone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'AppleTV',
        'model' => 'Apple TV',
        'device' => 'tv',
      ),
      1 => 
      array (
        'regex' => 'iPad',
        'model' => 'iPad',
        'device' => 'tablet',
      ),
      2 => 
      array (
        'regex' => 'iPod',
        'model' => 'iPod Touch',
        'device' => 'smartphone',
      ),
      3 => 
      array (
        'regex' => 'iPhone',
        'model' => 'iPhone',
        'device' => 'smartphone',
      ),
    ),
  ),
  'MicroMax' => 
  array (
    'regex' => 'MicroMax[ \\-\\_]?[a-z0-9]+',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'MicroMax(?:[ \\-\\_])?(P[a-z0-9]+)',
        'model' => '$1',
        'device' => 'tablet',
      ),
      1 => 
      array (
        'regex' => 'MicroMax(?:[ \\-\\_])?([a-z0-9]+)',
        'model' => '$1',
      ),
    ),
  ),
  'Acer' => 
  array (
    'regex' => 'acer|a(?:101|110|200|210|211|500|501|510|511|700|701) Build',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'Acer; ?([^;\\)]+)',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'Acer[ _-]?([^;\\)]+) Build',
        'model' => '$1',
      ),
      2 => 
      array (
        'regex' => 'acer[\\-_]([a-z0-9]+)',
        'model' => '$1',
      ),
      3 => 
      array (
        'regex' => 'a(101|110|200|210|211|500|501|510|511|700|701) Build',
        'model' => 'Icona Tab A$1',
        'device' => 'tablet',
      ),
    ),
  ),
  'Airness' => 
  array (
    'regex' => 'AIRNESS-([a-z0-9]+)',
    'device' => 'feature phone',
    'model' => '$1',
  ),
  'Alcatel' => 
  array (
    'regex' => 'Alcatel|Alc[a-z0-9]+|One ?Touch',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => '(?:Alcatel[ _])?One[ _]?Touch[ _]((?:T[0-9]+|TAB[^/;]+|EVO[78](?:HD)?)) Build',
        'device' => 'tablet',
        'model' => 'One Touch $1',
      ),
      1 => 
      array (
        'regex' => '(?:Alcatel[ _])?One[ _]?Touch([^/;]*) Build',
        'model' => 'One Touch$1',
      ),
      2 => 
      array (
        'regex' => 'Alcatel UP',
        'model' => '',
      ),
      3 => 
      array (
        'regex' => 'ALCATEL([^/;]+) Build',
        'model' => '$1',
      ),
      4 => 
      array (
        'regex' => 'ALCATEL[ \\-]?([^/;\\)]+)',
        'model' => '$1',
      ),
      5 => 
      array (
        'regex' => 'ALCATEL_([^/;\\)]+)',
        'model' => '$1',
      ),
      6 => 
      array (
        'regex' => 'Alc([a-z0-9]+)',
        'model' => '$1',
      ),
    ),
  ),
  'Amoi' => 
  array (
    'regex' => 'Amoi',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'Amoi[\\- /](a-z0-9]+)',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'Amoisonic-([a-z0-9]+)',
        'model' => '$1',
      ),
    ),
  ),
  'Archos' => 
  array (
    'regex' => 'Archos',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'Archos ?5 Build',
        'device' => 'tablet',
        'model' => '5',
      ),
      1 => 
      array (
        'regex' => 'Archos ([^/;]*(?:PAD)[^/;]*) Build',
        'device' => 'tablet',
        'model' => '$1',
      ),
      2 => 
      array (
        'regex' => 'Archos ((?:[789]|10)[0-9]?[a-z]* ?(?:G9|G10|Helium|Titanium|Cobalt|Platinum|Xenon|Carbon|Neon|XS|IT)[^/;]*) Build',
        'device' => 'tablet',
        'model' => '$1',
      ),
      3 => 
      array (
        'regex' => 'Archos ([a-z0-9 ]+) Build',
        'model' => '$1',
      ),
      4 => 
      array (
        'regex' => 'Archos ([a-z0-9]+)',
        'model' => '$1',
      ),
    ),
  ),
  'Arnova' => 
  array (
    'regex' => 'arnova|AN[0-9]',
    'device' => 'tablet',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'Arnova ([^/;]*) Build',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'AN([0-9][a-z0-9]+)',
        'model' => '$1',
      ),
    ),
  ),
  'Asus' => 
  array (
    'regex' => 'Asus|Transformer|PadFone',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'Asus(?:-|;)?([a-z0-9]+)',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => '(PadFone(?: [0-9]+)?)',
        'model' => '$1',
      ),
      2 => 
      array (
        'regex' => '(Transformer (Pad |Prime )?TF[0-9a-z]+)',
        'device' => 'tablet',
        'model' => '$1',
      ),
    ),
  ),
  'Audiovox' => 
  array (
    'regex' => 'Audiovox|CDM|UTS(?:TARCOM)?\\-|audio[a-z0-9\\-]+',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'Audiovox[_\\-]([a-z0-9\\-]+)',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'CDM(?:-)?([a-z0-9]+)',
        'model' => 'CDM-$1',
      ),
      2 => 
      array (
        'regex' => 'UTS(?:TARCOM)?-([a-z0-9\\-]+)',
        'model' => 'CDM-$1',
      ),
      3 => 
      array (
        'regex' => 'audio([a-z0-9\\-]+)',
        'model' => 'CDM-$1',
      ),
    ),
  ),
  'Avvio' => 
  array (
    'regex' => 'Avvio[ _]([a-z0-9\\-]+)',
    'device' => 'smartphone',
    'model' => '$1',
  ),
  'Barnes & Noble' => 
  array (
    'regex' => 'Nook|BN[TR]V[0-9]+',
    'device' => 'tablet',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'Nook([a-z0-9]+)',
        'model' => 'Nook $1',
      ),
      1 => 
      array (
        'regex' => 'Nook[ _]([^/;]+)[ _]Build',
        'model' => 'Nook $1',
      ),
      2 => 
      array (
        'regex' => '(BN[TR]V[0-9]+)',
        'model' => 'Nook $1',
      ),
    ),
  ),
  'Blu' => 
  array (
    'regex' => 'blu ([^/;]+) Build',
    'device' => 'smartphone',
    'model' => '$1',
  ),
  'BBK' => 
  array (
    'regex' => 'vivo',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'vivo ([^/;]+) Build',
        'model' => 'Vivo $1',
      ),
      1 => 
      array (
        'regex' => 'vivo_([a-z0-9]+)',
        'model' => 'Vivo $1',
      ),
    ),
  ),
  'Bird' => 
  array (
    'regex' => 'BIRD[\\-. _]([a-z0-9]+)',
    'device' => 'feature phone',
    'model' => '$1',
  ),
  'Becker' => 
  array (
    'regex' => 'Becker-([a-z0-9]+)',
    'device' => 'feature phone',
    'model' => '$1',
  ),
  'Beetel' => 
  array (
    'regex' => 'Beetel ([a-z0-9]+)',
    'device' => 'feature phone',
    'model' => '$1',
  ),
  'BenQ-Siemens' => 
  array (
    'regex' => 'BENQ-SIEMENS - ([a-z0-9]+)',
    'device' => 'feature phone',
    'model' => '$1',
  ),
  'BenQ' => 
  array (
    'regex' => 'BENQ(?:[ \\-])?([a-z0-9]+)',
    'device' => 'feature phone',
    'model' => '$1',
  ),
  'Bmobile' => 
  array (
    'regex' => 'Bmobile_([a-z0-9]+)',
    'device' => 'smartphone',
    'model' => '$1',
  ),
  'bq' => 
  array (
    'regex' => 'bq [^/;]+ Build',
    'device' => 'tablet',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'bq (Aquaris[^/;]*) Build',
        'model' => '$1',
        'device' => 'smartphone',
      ),
      1 => 
      array (
        'regex' => 'bq ([^/;]+) Build',
        'model' => '$1',
      ),
    ),
  ),
  'Capitel' => 
  array (
    'regex' => 'Capitel-([a-z0-9]+)',
    'device' => 'feature phone',
    'model' => '$1',
  ),
  'Cat' => 
  array (
    'regex' => 'Cat ?(tablet|stargate|nova)',
    'device' => 'tablet',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'Cat ?(?:tablet)? ?((?:Galactica|Nova|StarGate|PHOENIX)[^/;]*) Build',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'Cat ?tablet',
        'model' => 'Nova',
      ),
    ),
  ),
  'Cherry Mobile' => 
  array (
    'regex' => 'Cherry|Flare2X|Fusion Bolt',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'Cherry(?: ?Mobile)?[ _]?([^/;]+) Build',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => '(Flare2X)',
        'model' => '$1',
      ),
      2 => 
      array (
        'regex' => '(Fusion Bolt)',
        'model' => '$1',
        'device' => 'tablet',
      ),
    ),
  ),
  'Compal' => 
  array (
    'regex' => 'Compal-[a-z0-9]+',
    'device' => 'feature phone',
    'model' => '$1',
  ),
  'Coolpad' => 
  array (
    'regex' => '(?:YL-)?Coolpad',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => '(?:YL-)?Coolpad[ _-]?([^/;]+) Build',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => '(?:YL-)?Coolpad[ _-]?([a-z0-9-]+)',
        'model' => '$1',
      ),
    ),
  ),
  'Cricket' => 
  array (
    'regex' => 'Cricket-([a-z0-9]+)',
    'device' => 'feature phone',
    'model' => '$1',
  ),
  'Cube' => 
  array (
    'regex' => 'Cube|(U[0-9]+GT(?:[0-9]|[\\-_][a-z]+)|K8GT)',
    'device' => 'tablet',
    'models' => 
    array (
      0 => 
      array (
        'regex' => '(U[0-9]+GT(?:[0-9]|[\\-_][a-z]+))',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => '(K8GT)',
        'model' => '$1',
      ),
    ),
  ),
  'Danew' => 
  array (
    'regex' => 'Dslide ?([^;/]+) Build',
    'device' => 'tablet',
    'model' => 'DSlide $1',
  ),
  'Denver' => 
  array (
    'regex' => '(TA[CDQ]-[0-9]+)',
    'device' => 'tablet',
    'model' => '$1',
  ),
  'Dell' => 
  array (
    'regex' => 'Dell',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'Dell Streak([^/;]*) Build',
        'model' => 'Streak$1',
        'device' => 'tablet',
      ),
      1 => 
      array (
        'regex' => 'Dell; ([^;/\\)]+)',
        'model' => '$1',
      ),
      2 => 
      array (
        'regex' => 'Dell[ _-]([^/;]+) Build',
        'model' => '$1',
      ),
    ),
  ),
  'Dbtel' => 
  array (
    'regex' => 'DBTEL(?:[\\-/])?([a-z0-9]+)',
    'device' => 'feature phone',
    'model' => '$1',
  ),
  'Dicam' => 
  array (
    'regex' => 'DICAM-([a-z0-9]+)',
    'device' => 'feature phone',
    'model' => '$1',
  ),
  'DoCoMo' => 
  array (
    'regex' => 'DoCoMo|\\;FOMA|KGT/1\\.0',
    'device' => 'feature phone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'DoCoMo/[12]\\.0[/ ]([a-z0-9]+)',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => '([a-z0-9]+)(?:_W)?\\;FOMA',
        'model' => '$1',
      ),
      2 => 
      array (
        'regex' => 'KGT/1\\.0 ([a-z0-9]+)',
        'model' => '$1',
      ),
    ),
  ),
  'Doogee' => 
  array (
    'regex' => '((?:BIGBOY|COLLO[23]?|DAGGER|DISCOVERY|FIND|HOTWIND|LATTE|MAX|MINT|MOON|PIXELS|RAINBOX|TURBO|VALENCIA|VOYAGER) DG[0-9]+) Build',
    'device' => 'smartphone',
    'model' => '$1',
  ),
  'Dopod' => 
  array (
    'regex' => 'Dopod(?: )?([a-z0-9]+)',
    'device' => 'feature phone',
    'model' => '$1',
  ),
  'E-Boda' => 
  array (
    'regex' => 'E-Boda',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'E-Boda ((?:Revo|Izzycomm|Essential|Intelligence|Supreme)[^/;]+) Build',
        'device' => 'tablet',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'E-Boda ([^/;]+) Build',
        'model' => '$1',
      ),
    ),
  ),
  'Easypix' => 
  array (
    'regex' => 'EasyPad|EasyPhone',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => '(EasyPhone[^/;]+) Build',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => '(EasyPad[^/;]+) Build',
        'model' => '$1',
        'device' => 'tablet',
      ),
    ),
  ),
  'Ericy' => 
  array (
    'regex' => 'Ericy-([a-z0-9]+)',
    'device' => 'feature phone',
    'model' => '$1',
  ),
  'Sony Ericsson' => 
  array (
    'regex' => 'Sony ?Ericsson|portalmmm/2\\.0 K|(?:WT|LT|SO|ST|SK)[0-9]+[a-z]*[0-9]*(?: Build|\\))|MT[0-9]{2}[a-z]? Build',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'SonyEricsson([a-z0-9]+) Build',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'Sony(?: )?Ericsson ?([a-z0-9\\-]+)',
        'model' => '$1',
      ),
      2 => 
      array (
        'regex' => '((?:WT|LT|SO|ST|SK)[0-9]+[a-z]*[0-9]*)(?: Build|\\))',
        'model' => '$1',
      ),
      3 => 
      array (
        'regex' => '(MT[0-9]{2}[a-z]?) Build',
        'model' => '$1',
      ),
      4 => 
      array (
        'regex' => 'portalmmm/2.0 K([a-z0-9]+)',
        'model' => 'K$1',
      ),
    ),
  ),
  'Ericsson' => 
  array (
    'regex' => '(?:Ericsson(?:/ )?[a-z0-9]+)|(?:R380 2.0 WAP1.1)',
    'device' => 'feature phone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'Ericsson(?:/ )?([a-z0-9]+)',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'R380 2.0 WAP1.1',
        'model' => 'R380',
      ),
    ),
  ),
  'eTouch' => 
  array (
    'regex' => 'eTouch ?([a-z0-9]+)',
    'device' => 'smartphone',
    'model' => '$1',
  ),
  'Storex' => 
  array (
    'regex' => '(eZee[ \']*Tab[^;/]*) Build',
    'device' => 'tablet',
    'model' => '$1',
  ),
  'Evertek' => 
  array (
    'regex' => '(Ever(?:Glory|Shine|Miracle|Mellow|Classic|Trendy|Fancy)[^/;]*) Build',
    'device' => 'smartphone',
    'model' => '$1',
  ),
  'Ezze' => 
  array (
    'regex' => 'EZZE-|EZ[a-z0-9]+',
    'device' => 'feature phone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'EZZE-([a-z0-9]+)',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'EZ([a-z0-9]+)',
        'model' => 'EZ$1',
      ),
    ),
  ),
  'Ezio' => 
  array (
    'regex' => 'EZIO-([a-z0-9]+)',
    'device' => 'feature phone',
    'model' => '$1',
  ),
  'Gemini' => 
  array (
    'regex' => '(GEM[0-9]+[a-z]*)',
    'device' => 'tablet',
    'model' => '$1',
  ),
  'Gigabyte' => 
  array (
    'regex' => 'GSmart [a-z0-9 ]+ Build|Gigabyte-[a-z0-9]+',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => '(GSmart [a-z0-9 ]+) Build',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'Gigabyte-([a-z0-9]+)',
        'model' => '$1',
      ),
    ),
  ),
  'Gionee' => 
  array (
    'regex' => 'GIONEE-[a-z0-9]+',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'GIONEE-([a-z0-9]+).*Android',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'Android.*GIONEE-([a-z0-9]+)',
        'model' => '$1',
      ),
      2 => 
      array (
        'regex' => 'GIONEE-([a-z0-9]+)',
        'model' => '$1',
        'device' => 'feature phone',
      ),
    ),
  ),
  'Google' => 
  array (
    'regex' => 'Nexus|GoogleTV|Glass',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'Glass',
        'model' => 'Glass',
      ),
      1 => 
      array (
        'regex' => 'Galaxy Nexus',
        'model' => 'Galaxy Nexus',
      ),
      2 => 
      array (
        'regex' => '(Nexus (?:S|4|5|One))',
        'model' => '$1',
      ),
      3 => 
      array (
        'regex' => '(Nexus (?:7|10))',
        'device' => 'tablet',
        'model' => '$1',
      ),
      4 => 
      array (
        'regex' => 'GoogleTV',
        'device' => 'tv',
        'model' => 'GoogleTV',
      ),
    ),
  ),
  'Gradiente' => 
  array (
    'regex' => 'GRADIENTE',
    'device' => 'feature phone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'GRADIENTE-([a-z0-9]+)',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'GRADIENTE ([a-z0-9\\-]+)',
        'model' => '$1',
      ),
    ),
  ),
  'Grundig' => 
  array (
    'regex' => 'GR?-TB[0-9]+[a-z]*|GRUNDIG|portalmmm/2\\.0 G',
    'device' => 'tv',
    'models' => 
    array (
      0 => 
      array (
        'regex' => '(GR?-TB[0-9]+[a-z]*)',
        'device' => 'smartphone',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'GRUNDIG ([a-z0-9]+)',
        'model' => '$1',
      ),
      2 => 
      array (
        'regex' => 'portalmmm/2\\.0 G([a-z0-9]+)',
        'model' => 'G$1',
      ),
    ),
  ),
  'Haier' => 
  array (
    'regex' => 'Haier',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'Haier[ _-](HW-[^/;]+) Build',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'Haier[ _-](HW-[a-z0-9_-]+)',
        'model' => '$1',
      ),
      2 => 
      array (
        'regex' => 'Haier[ _-]([a-z0-9\\-]+)',
        'model' => '$1',
        'device' => 'feature phone',
      ),
    ),
  ),
  'Huawei' => 
  array (
    'regex' => '(HW-)?Huawei|Ideos|vodafone[a-z0-9]+',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => '(MediaPad[^/;]*) Build',
        'device' => 'tablet',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'Ideos([^;/]*) Build',
        'model' => 'Ideos$1',
      ),
      2 => 
      array (
        'regex' => 'Huawei[ _-]?([^/;]*) Build',
        'model' => '$1',
      ),
      3 => 
      array (
        'regex' => '(?:HW-)?Huawei(?:/1\\.0/0?(?:Huawei))?[_\\- /]?([a-z0-9\\-_]+)',
        'model' => '$1',
      ),
      4 => 
      array (
        'regex' => 'Huawei; ([a-z0-9 -]+)',
        'model' => '$1',
      ),
      5 => 
      array (
        'regex' => 'vodafone([a-z0-9]+)',
        'model' => 'Vodafone $1',
      ),
    ),
  ),
  'iBall' => 
  array (
    'regex' => 'iBall[ _]([^/;]*)[ _]Build',
    'device' => 'tablet',
    'model' => '$1',
  ),
  'iBerry' => 
  array (
    'regex' => 'AUXUS ([^/;]+) Build',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'AUXUS (Core[^/;]+) Build',
        'device' => 'tablet',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'AUXUS ([^/;]+) Build',
        'model' => '$1',
      ),
    ),
  ),
  'Infinix' => 
  array (
    'regex' => 'Infinix',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'Infinix (X[78]00)',
        'device' => 'tablet',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'Infinix (X\\d+)',
        'model' => '$1',
      ),
    ),
  ),
  'Inkti' => 
  array (
    'regex' => 'intki[ _]([^/;]*)[ _]Build',
    'device' => 'smartphone',
    'model' => '$1',
  ),
  'Innostream' => 
  array (
    'regex' => 'INNO([a-z0-9]+)',
    'device' => 'feature phone',
    'model' => 'INNO$1',
  ),
  'INQ' => 
  array (
    'regex' => 'INQ[/ ]',
    'device' => 'feature phone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'INQ/([a-z0-9\\-]+)',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'INQ ([^;/]+) Build',
        'model' => '$1',
        'device' => 'smartphone',
      ),
    ),
  ),
  'Intex' => 
  array (
    'regex' => 'Intex|Aqua[ _][^/;]+[ _]Build',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'Intex[ _]([^/;]*)[ _]Build',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => '(Aqua[ _][^/;]+)[ _]Build',
        'model' => '$1',
      ),
      2 => 
      array (
        'regex' => 'Intex[ _]([a-z0-9_+-]+)',
        'model' => '$1',
      ),
    ),
  ),
  'i-mate' => 
  array (
    'regex' => 'i-mate ([a-z0-9]+)',
    'device' => 'feature phone',
    'model' => '$1',
  ),
  'i-mobile' => 
  array (
    'regex' => 'i-mobile ?[a-z0-9]+',
    'device' => 'feature phone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'i-mobile (i-note[^/;]*) Build',
        'model' => '$1',
        'device' => 'tablet',
      ),
      1 => 
      array (
        'regex' => 'i-mobile ((?:IQ|i-style)[^/;]*) Build',
        'model' => '$1',
        'device' => 'smartphone',
      ),
      2 => 
      array (
        'regex' => 'i-mobile(?: )?([a-z0-9\\- ]+) Build',
        'model' => '$1',
      ),
      3 => 
      array (
        'regex' => 'i-mobile(?: )?([a-z0-9]+)',
        'model' => '$1',
      ),
    ),
  ),
  'iKoMo' => 
  array (
    'regex' => 'iKoMo ([a-z0-9]+)',
    'device' => 'feature phone',
    'model' => '$1',
  ),
  'Jiayu' => 
  array (
    'regex' => '(JY-[a-z0-9]+) Build',
    'device' => 'smartphone',
    'model' => '$1',
  ),
  'Jolla' => 
  array (
    'regex' => 'Jolla',
    'device' => 'smartphone',
    'model' => '',
  ),
  'Kazam' => 
  array (
    'regex' => 'Kazam ([^;/]+) Build',
    'device' => 'smartphone',
    'model' => '$1',
  ),
  'KT-Tech' => 
  array (
    'regex' => '(KM-[a-z0-9]+|EV-[a-z0-9]+)',
    'device' => 'smartphone',
    'model' => '$1',
  ),
  'KDDI' => 
  array (
    'regex' => 'kddi-([a-z0-9]+)',
    'device' => 'feature phone',
    'model' => '$1',
  ),
  'K-Touch' => 
  array (
    'regex' => 'K-Touch[ _][a-z0-9]+',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'K-Touch[ _]([^/;]*)[ _]Build',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'K-Touch[ _]([a-z0-9]+)',
        'model' => '$1',
      ),
    ),
  ),
  'Kyocera' => 
  array (
    'regex' => 'Kyocera|KWC-|QC-',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'Kyocera-KZ-([a-z0-9]+)',
        'model' => 'KZ $1',
      ),
      1 => 
      array (
        'regex' => 'Kyocera(?:[\\-/])?([a-z0-9]+)',
        'model' => '$1',
      ),
      2 => 
      array (
        'regex' => '(?:KWC|QC)-([a-z0-9]+)',
        'model' => '$1',
      ),
    ),
  ),
  'Lanix' => 
  array (
    'regex' => 'LANIX-([a-z0-9]+)',
    'device' => 'feature phone',
    'model' => '$1',
  ),
  'LCT' => 
  array (
    'regex' => 'LCT_([a-z0-9]+)',
    'device' => 'feature phone',
    'model' => '$1',
  ),
  'Lenco' => 
  array (
    'regex' => 'Lenco ([^/;]*) Build',
    'device' => 'tablet',
    'model' => '$1',
  ),
  'Lenovo' => 
  array (
    'regex' => '(?:LNV-)?Lenovo|IdeaTab',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'Lenovo (B[0-9]+[^/;]*) Build',
        'model' => 'IdeaTab $1',
        'device' => 'tablet',
      ),
      1 => 
      array (
        'regex' => 'Lenovo ([^/;]*) Build',
        'model' => '$1',
      ),
      2 => 
      array (
        'regex' => '(?:LNV-|Lenovo-)?Lenovo[ \\-_]([a-z0-9_+-]+)',
        'model' => '$1',
      ),
      3 => 
      array (
        'regex' => 'IdeaTab[ \\-_]?([a-z0-9]+)',
        'model' => 'IdeaTab $1',
        'device' => 'tablet',
      ),
    ),
  ),
  'Lexibook' => 
  array (
    'regex' => '(MFC[0-9]{3}[a-z]{2,})',
    'device' => 'tablet',
    'model' => '$1',
  ),
  'LGUPlus' => 
  array (
    'regex' => 'LGUPlus',
    'device' => 'smartphone',
    'model' => '',
  ),
  'LG' => 
  array (
    'regex' => 'LG|portalmmm/2\\.0 (?:KE|KG|KP|L3)|VX[0-9]+',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'LGE_DLNA_SDK|NetCast',
        'device' => 'tv',
        'model' => 'NetCast',
      ),
      1 => 
      array (
        'regex' => 'LGE(?: |-LG| LG-AX|-)([a-z0-9]+)',
        'model' => '$1',
      ),
      2 => 
      array (
        'regex' => 'LGE;([a-z0-9\\-]+)',
        'model' => '$1',
      ),
      3 => 
      array (
        'regex' => 'LG[ _-](V90.*|Optimus[ _-]Pad.*) Build',
        'device' => 'tablet',
        'model' => '$1',
      ),
      4 => 
      array (
        'regex' => 'LG(?:/|-LG| |-)?([^/;]*) Build',
        'model' => '$1',
      ),
      5 => 
      array (
        'regex' => 'LG(?:/|-LG| |-)?([a-z0-9]+)',
        'model' => '$1',
      ),
      6 => 
      array (
        'regex' => 'LG; ([a-z0-9 ]+)',
        'model' => '$1',
      ),
      7 => 
      array (
        'regex' => 'portalmmm/2.0 ((?:KE|KG|KP|L3)[a-z0-9]+)',
        'model' => '$1',
      ),
      8 => 
      array (
        'regex' => '(VX[0-9]+)',
        'model' => '$1',
      ),
    ),
  ),
  'Logicom' => 
  array (
    'regex' => '(TAB950|TAB1062|E731|E812|E912|E1031) Build',
    'device' => 'tablet',
    'model' => '$1',
  ),
  'Microsoft' => 
  array (
    'regex' => 'KIN\\.(One|Two)',
    'device' => 'feature phone',
    'model' => 'Kin $1',
  ),
  'Konka' => 
  array (
    'regex' => 'KONKA_([a-z0-9]+)',
    'device' => 'feature phone',
    'model' => '$1',
  ),
  'Karbonn' => 
  array (
    'regex' => 'Karbonn',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'Karbonn_([a-z0-9]+)',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'Karbonn ([^;/]+) Build',
        'model' => '$1',
      ),
    ),
  ),
  'Sagem' => 
  array (
    'regex' => 'SAGEM|portalmmm/2.0 (?:SG|my)',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'SAGEM ([a-z0-9]+)',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'SAGEM-([a-z0-9\\-]+)',
        'model' => '$1',
      ),
      2 => 
      array (
        'regex' => 'portalmmm/2.0 ((?:SG|my)[a-z0-9]+)',
        'model' => '$1',
      ),
    ),
  ),
  'Coby Kyros' => 
  array (
    'regex' => '(MID(?:1024|1125|1045|1048|1060|1065|4331|7012|7015A?|7022|7032|7035|7036|7042|7047|7048|7052|7065|7120|8024|8042|8048|8065|8127|9724|9740|9742)) Build',
    'device' => 'tablet',
    'model' => '$1',
  ),
  'Mpman' => 
  array (
    'regex' => '(?:MPQC|MPDC)[0-9]+|PH(?:150|340|350|360|451|500|520)|(?:MID(?:7C|74C|82C|84C|801|811|701|711|170|77C|43C|102C|103C|104C|114C)|MP(?:843|717|718|1010|7007|7008|843|888|959|969)|MGP7) Build',
    'device' => 'tablet',
    'models' => 
    array (
      0 => 
      array (
        'regex' => '((?:MPQC|MPDC)[0-9]+[^/;]+) Build',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => '(MID(?:7C|74C|82C|84C|801|811|701|711|170|77C|43C|102C|103C|104C|114C)|MP(?:843|717|718|1010|7007|7008|843|888|959|969)|MGP7) Build',
        'model' => '$1',
      ),
      2 => 
      array (
        'regex' => '(PH(?:150|340|350|360|451|500|520))',
        'model' => '$1',
        'device' => 'smartphone',
      ),
    ),
  ),
  'Manta Multimedia' => 
  array (
    'regex' => '(MID(?:06[SN]|08[S]?|12|13|14|15|701|702|703|704|705(?:DC)?|706[AS]?|707|708|709|711|712|714|717|781|801|802|1001|1002|1003|1004(?: 3G)?|1005|7802|9701|9702)) Build',
    'device' => 'tablet',
    'model' => '$1',
  ),
  'Medion' => 
  array (
    'regex' => 'Medion|(?:MD_)?LIFETAB',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => '(?:MD_)?LIFETAB_([a-z0-9]+)',
        'device' => 'tablet',
        'model' => 'Lifetab $1',
      ),
      1 => 
      array (
        'regex' => 'Medion ([^/;]+) Build',
        'model' => '$1',
      ),
    ),
  ),
  'Memup' => 
  array (
    'regex' => 'SlidePad ?([^;/]*) Build',
    'device' => 'tablet',
    'model' => 'SlidePad $1',
  ),
  'Mio' => 
  array (
    'regex' => 'MIO(?:/)?([a-z0-9]+)',
    'device' => 'smartphone',
    'model' => '$1',
  ),
  'Mitsubishi' => 
  array (
    'regex' => 'MITSU|portalmmm/[12]\\.0 M',
    'device' => 'feature phone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'MITSU/[a-z0-9.]+ \\(([a-z0-9]+)\\)',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'MITSU[ \\-]?([a-z0-9]+)',
        'model' => '$1',
      ),
      2 => 
      array (
        'regex' => 'portalmmm/[12]\\.0 (M[a-z0-9]+)',
        'model' => '$1',
      ),
    ),
  ),
  'Mobistel' => 
  array (
    'regex' => '(Cynus [^/;]+) Build',
    'device' => 'smartphone',
    'model' => '$1',
  ),
  'Motorola' => 
  array (
    'regex' => 'MOT|(?<!AN)DROID ?(?:Build|[a-z0-9]+)|portalmmm/2.0 (?:E378i|L6|L7|v3)|XOOM [^;/]*Build|(?:XT|MZ|MB|ME)[0-9]{3,4}(?:\\(Defy\\))? Build',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'Motorola[ _\\-]([a-z0-9]+)',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'MOTORAZR[ _\\-]([a-z0-9]+)',
        'model' => 'RAZR $1',
      ),
      2 => 
      array (
        'regex' => 'MOTORIZR[ _\\-]([a-z0-9]+)',
        'model' => 'RIZR $1',
      ),
      3 => 
      array (
        'regex' => 'MOT[O]?[_\\-]?([a-z0-9.]+)',
        'model' => '$1',
      ),
      4 => 
      array (
        'regex' => '(?<!AN)DROID ?([a-z0-9 ]*) Build',
        'model' => 'DROID $1',
      ),
      5 => 
      array (
        'regex' => '(?<!AN)DROID ?([a-z0-9]+)',
        'model' => 'DROID $1',
      ),
      6 => 
      array (
        'regex' => 'portalmmm/2.0 ((?:E378i|L6|L7|V3)[a-z0-9]+)',
        'model' => '$1',
      ),
      7 => 
      array (
        'regex' => '(XOOM [^;/]*)Build',
        'device' => 'tablet',
        'model' => '$1',
      ),
      8 => 
      array (
        'regex' => '(MZ[0-9]{3}) Build',
        'device' => 'tablet',
        'model' => '$1',
      ),
      9 => 
      array (
        'regex' => '((?:ME|MB|XT)[0-9]{3,4}(?:\\(Defy\\))?) Build',
        'model' => '$1',
      ),
    ),
  ),
  'MyPhone' => 
  array (
    'regex' => '(?:MyPhone|MyPad) .+ Build',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'MyPad (.+) Build',
        'model' => 'MyPad $1',
        'device' => 'tablet',
      ),
      1 => 
      array (
        'regex' => 'MyPhone (.+) Build',
        'model' => '$1',
      ),
    ),
  ),
  'NEC' => 
  array (
    'regex' => 'NEC|KGT/2\\.0|portalmmm/1\\.0 (?:DB|N)|(?:portalmmm|o2imode)/2.0[ ,]N',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => '(?:NEC-|KGT/2\\.0 )([a-z0-9]+)',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'portalmmm/1\\.0 ((?:DB|N)[a-z0-9]+)',
        'model' => '$1',
      ),
      2 => 
      array (
        'regex' => '(?:portalmmm|o2imode)/2\\.0[ ,](N[a-z0-9]+)',
        'model' => '$1',
      ),
    ),
  ),
  'Newgen' => 
  array (
    'regex' => 'NEWGEN\\-([a-z0-9]+)',
    'device' => 'feature phone',
    'model' => '$1',
  ),
  'NGM' => 
  array (
    'regex' => 'NGM_([a-z0-9]+)',
    'device' => 'smartphone',
    'model' => '$1',
  ),
  'Nexian' => 
  array (
    'regex' => 'S?Nexian',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'S?Nexian[ ]?([a-z0-9\\-]+)',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'S?Nexian-([a-z0-9]+)',
        'model' => '$1',
      ),
    ),
  ),
  'O2' => 
  array (
    'regex' => 'Xda|O2[ \\-]|COCOON',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => '(Xda[ _][a-z0-9_]+)',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => '(COCOON)',
        'model' => '$1',
      ),
      2 => 
      array (
        'regex' => 'O2 ([a-z0-9 ]+)',
        'model' => '$1',
      ),
      3 => 
      array (
        'regex' => 'O2-([a-z0-9]+)',
        'model' => '$1',
      ),
    ),
  ),
  'Onda' => 
  array (
    'regex' => 'Onda',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => '([a-z0-9]+)[ _]Onda',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'Onda ([a-z0-9]+)',
        'model' => '$1',
      ),
    ),
  ),
  'OPPO' => 
  array (
    'regex' => 'OPPO[ ]?([a-z0-9]+)',
    'device' => 'smartphone',
    'model' => '$1',
  ),
  'Opsson' => 
  array (
    'regex' => 'Opsson ([^/;]+) Build',
    'device' => 'smartphone',
    'model' => '$1',
  ),
  'Orange' => 
  array (
    'regex' => 'SPV[ \\-]?([a-z0-9]+)',
    'device' => 'smartphone',
    'model' => 'SPV $1',
  ),
  'Oysters' => 
  array (
    'regex' => 'Oysters',
    'device' => 'tablet',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'Oysters ((?:Arctic|Indian|Atlantic|Pacific)[^/;]+) Build',
        'device' => 'smartphone',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'Oysters ([^/;]+) Build',
        'model' => '$1',
      ),
    ),
  ),
  'Panasonic' => 
  array (
    'regex' => 'Panasonic',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'Panasonic MIL DLNA',
        'device' => 'tv',
        'model' => 'Viera Cast',
      ),
      1 => 
      array (
        'regex' => 'Panasonic[ \\-]?([a-z0-9]+)',
        'model' => '$1',
      ),
      2 => 
      array (
        'regex' => 'portalmmm/2.0 (P[a-z0-9]+)',
        'model' => '$1',
      ),
    ),
  ),
  'Philips' => 
  array (
    'regex' => 'Philips',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'Philips-FISIO ([a-z0-9]+)',
        'model' => 'Fisio $1',
      ),
      1 => 
      array (
        'regex' => 'Philips[ ]?([a-z0-9]+)',
        'model' => '$1',
      ),
      2 => 
      array (
        'regex' => 'Philips-([a-z0-9\\-@]+)',
        'model' => '$1',
      ),
    ),
  ),
  'phoneOne' => 
  array (
    'regex' => 'phoneOne[ \\-]?([a-z0-9]+)',
    'device' => 'smartphone',
    'model' => '$1',
  ),
  'Rover' => 
  array (
    'regex' => 'Rover ([0-9]+)',
    'device' => 'feature phone',
    'model' => '$1',
  ),
  'Siemens' => 
  array (
    'regex' => 'SIEMENS|SIE-|portalmmm/2\\.0 SI|S55|SL45i',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'SIEMENS[ \\-]([a-z0-9]+)',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'SIE(?:MENS )?[\\-]?([a-z0-9]+)',
        'model' => '$1',
      ),
      2 => 
      array (
        'regex' => '(S55|SL45i)',
        'model' => '$1',
      ),
      3 => 
      array (
        'regex' => 'portalmmm/2.0 (SI[a-z0-9]+)',
        'model' => '$1',
      ),
    ),
  ),
  'Samsung' => 
  array (
    'regex' => 'SAMSUNG|SC-(?:02C|04E|01F)|S(?:CH|GH|PH|EC|AM|HV|HW|M)-|SMART-TV|GT-|Galaxy|(?:portalmmm|o2imode)/2\\.0 [SZ]|sam[rua]',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => '(GT-(P|N8|N5)[0-9]+[a-z]?)',
        'device' => 'tablet',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'SAMSUNG[\\-][ ]?([a-z0-9]+[\\-_][a-z0-9]+)',
        'model' => '$1',
      ),
      2 => 
      array (
        'regex' => 'SAMSUNG;[ ]?([a-z0-9]+[\\-_][a-z0-9]+)',
        'model' => '$1',
      ),
      3 => 
      array (
        'regex' => 'SAMSUNG[ _/-]?([a-z0-9\\-]+)',
        'model' => '$1',
      ),
      4 => 
      array (
        'regex' => 'SAMSUNG;[ ]?([a-z0-9 ]+)',
        'model' => '$1',
      ),
      5 => 
      array (
        'regex' => '((?:SCH|SGH|SPH|SHV|SHW|GT|SM)-[a-z0-9_-]+)',
        'model' => '$1',
      ),
      6 => 
      array (
        'regex' => 'SC-02C',
        'model' => 'Galaxy S II',
      ),
      7 => 
      array (
        'regex' => 'SC-01F',
        'model' => 'Galaxy Note 3',
      ),
      8 => 
      array (
        'regex' => 'SC-04E',
        'model' => 'Galaxy S4',
      ),
      9 => 
      array (
        'regex' => 'SEC-([a-z0-9]+)',
        'model' => '$1',
      ),
      10 => 
      array (
        'regex' => 'SAM-([a-z0-9]+)',
        'model' => 'SCH-$1',
      ),
      11 => 
      array (
        'regex' => 'SMART-TV',
        'device' => 'tv',
        'model' => 'Smart TV',
      ),
      12 => 
      array (
        'regex' => '(Galaxy [^/;]+) Build',
        'model' => '$1',
      ),
      13 => 
      array (
        'regex' => '(Galaxy [a-z0-9]+)',
        'model' => '$1',
      ),
      14 => 
      array (
        'regex' => '(?:portalmmm|o2imode)/2\\.0 ([SZ][a-z0-9]+)',
        'model' => '$1',
      ),
      15 => 
      array (
        'regex' => 'sam([rua][0-9]+)',
        'model' => 'SCH-$1',
      ),
    ),
  ),
  'SuperSonic' => 
  array (
    'regex' => '(SC-[0-9]+[a-z]+)',
    'device' => 'tablet',
    'model' => '$1',
  ),
  'Sumvision' => 
  array (
    'regex' => '(Cyclone [^/;]+) Build',
    'device' => 'tablet',
    'model' => '$1',
  ),
  'Pantech' => 
  array (
    'regex' => 'Pantech|P[GN]-|PT-[a-z0-9]{3,}|TX[T]?[0-9]+|IM-[a-z0-9]+',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'Pantech[ \\-]?([a-z0-9]+)',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'Pantech_([a-z0-9\\-]+)',
        'model' => '$1',
      ),
      2 => 
      array (
        'regex' => '(P[GTN]-[a-z0-9]+)',
        'model' => '$1',
      ),
      3 => 
      array (
        'regex' => '(TX[T]?[0-9]+)',
        'model' => '$1',
      ),
      4 => 
      array (
        'regex' => '(IM-[a-z0-9]+)',
        'model' => '$1',
      ),
    ),
  ),
  'Polaroid' => 
  array (
    'regex' => 'Polaroid|(?:PMID|MIDC)[0-9a-z]+ Build',
    'device' => 'tablet',
    'models' => 
    array (
      0 => 
      array (
        'regex' => '((?:PMID|MIDC)[0-9a-z]+) Build',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'Polaroid',
        'model' => '',
      ),
    ),
  ),
  'PolyPad' => 
  array (
    'regex' => 'POLY ?PAD',
    'device' => 'tablet',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'POLY ?PAD[_ \\.]([a-z0-9]+) Build',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'POLY ?PAD[_\\.]([a-z0-9]+)',
        'model' => '$1',
      ),
    ),
  ),
  'Prestigio' => 
  array (
    'regex' => '(?:PMP|PAP)[0-9]+[a-z0-9_]+ Build',
    'device' => 'tablet',
    'models' => 
    array (
      0 => 
      array (
        'regex' => '(PMP[0-9]+[a-z0-9_]+) Build',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => '(PAP[0-9]+[a-z0-9_]+) Build',
        'model' => '$1',
        'device' => 'smartphone',
      ),
    ),
  ),
  'Sanyo' => 
  array (
    'regex' => 'Sanyo|MobilePhone ',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'SANYO[ \\-_]([a-z0-9\\-]+)',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'MobilePhone ([a-z0-9\\-]+)',
        'model' => '$1',
      ),
    ),
  ),
  'Qilive' => 
  array (
    'regex' => 'Qilive [0-9][^;/]* Build',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'Qilive ([0-5][^;/]*) Build',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'Qilive ([6-9][^;/]*) Build',
        'model' => '$1',
        'device' => 'tablet',
      ),
    ),
  ),
  'Quechua' => 
  array (
    'regex' => 'Quechua Phone 5',
    'device' => 'smartphone',
    'model' => 'Quechua Phone 5',
  ),
  'Ramos' => 
  array (
    'regex' => 'Ramos ?([^/;]+) Build',
    'device' => 'tablet',
    'model' => '$1',
  ),
  'Sendo' => 
  array (
    'regex' => 'Sendo([a-z0-9]+)',
    'device' => 'feature phone',
    'model' => '$1',
  ),
  'Spice' => 
  array (
    'regex' => 'Spice',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'Spice ([a-z0-9\\-]+)',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'Spice-([a-z0-9]+)',
        'model' => '$1',
      ),
    ),
  ),
  'Sharp' => 
  array (
    'regex' => 'SHARP|SBM|SH-[0-9]+[a-z]? Build|AQUOS',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'SHARP-AQUOS|AQUOSBrowser',
        'device' => 'tv',
        'model' => 'Aquos Net Plus',
      ),
      1 => 
      array (
        'regex' => 'SHARP[ \\-]([a-z0-9\\-]+)',
        'model' => '$1',
      ),
      2 => 
      array (
        'regex' => '(?:SHARP|SBM)([a-z0-9]+)',
        'model' => '$1',
      ),
      3 => 
      array (
        'regex' => '(SH-[0-9]+[a-z]?) Build',
        'model' => '$1',
      ),
    ),
  ),
  'Softbank' => 
  array (
    'regex' => 'Softbank|J-PHONE',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'Softbank/[12]\\.0/([a-z0-9]+)',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => '([a-z0-9]+);Softbank;',
        'model' => '$1',
      ),
      2 => 
      array (
        'regex' => 'J-PHONE/[0-9]\\.[0-9]/([a-z0-9\\-]+)',
        'model' => '$1',
      ),
    ),
  ),
  'Sony' => 
  array (
    'regex' => 'Sony(?! ?Ericsson)|SGP|Xperia',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'Sony (Tablet[^/;]*) Build',
        'model' => '$1',
        'device' => 'tablet',
      ),
      1 => 
      array (
        'regex' => 'SGP(?:311|312|321) Build',
        'model' => 'Xperia Tablet Z',
        'device' => 'tablet',
      ),
      2 => 
      array (
        'regex' => 'SGP(?:511|512|521) Build',
        'model' => 'Xperia Tablet Z2',
        'device' => 'tablet',
      ),
      3 => 
      array (
        'regex' => 'SGPT(?:12|121|122|123|13|131|132|133) Build',
        'model' => 'Xperia Tablet S',
        'device' => 'tablet',
      ),
      4 => 
      array (
        'regex' => '(SGP[^/;]*) Build',
        'model' => '$1',
        'device' => 'tablet',
      ),
      5 => 
      array (
        'regex' => 'Sony[ ]?([^/;]*) Build',
        'model' => '$1',
      ),
      6 => 
      array (
        'regex' => 'Sony[ ]?([a-z0-9\\-]+)',
        'model' => '$1',
      ),
      7 => 
      array (
        'regex' => 'Xperia ([^/;]*Tablet[^/;]*) Build',
        'model' => 'Xperia $1',
        'device' => 'tablet',
      ),
      8 => 
      array (
        'regex' => 'Xperia ([^;/]+) Build',
        'model' => 'Xperia $1',
      ),
    ),
  ),
  'Kindle' => 
  array (
    'regex' => 'KF(?:OT|TT|JWI|JWA|SOWI|APWI|THWI) Build|Kindle|Silk/\\d+\\.\\d+',
    'device' => 'tablet',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'KFTT Build',
        'model' => 'Kindle Fire HD',
      ),
      1 => 
      array (
        'regex' => 'KFJWI Build',
        'model' => 'Kindle Fire HD 8.9" WiFi',
      ),
      2 => 
      array (
        'regex' => 'KFJWA Build',
        'model' => 'Kindle Fire HD 8.9" 4G',
      ),
      3 => 
      array (
        'regex' => 'KFSOWI Build',
        'model' => 'Kindle Fire HD 7" WiFi',
      ),
      4 => 
      array (
        'regex' => 'KFTHWI Build',
        'model' => 'Kindle Fire HDX 7" WiFi',
      ),
      5 => 
      array (
        'regex' => 'KFTHWA Build',
        'model' => 'Kindle Fire HDX 7" 4G',
      ),
      6 => 
      array (
        'regex' => 'KFAPWI Build',
        'model' => 'Kindle Fire HDX 8.9" WiFi',
      ),
      7 => 
      array (
        'regex' => 'KFAPWA Build',
        'model' => 'Kindle Fire HDX 8.9" 4G',
      ),
      8 => 
      array (
        'regex' => 'KFOT|Kindle Fire|Silk/\\d+\\.\\d+',
        'model' => 'Kindle Fire',
      ),
      9 => 
      array (
        'regex' => 'Kindle',
        'model' => 'Kindle',
      ),
    ),
  ),
  'Symphony' => 
  array (
    'regex' => 'SYMPHONY[ \\_]([a-z0-9]+)',
    'device' => 'smartphone',
    'model' => '$1',
  ),
  'Qtek' => 
  array (
    'regex' => 'Qtek[ _]?([a-z0-9]+)',
    'device' => 'smartphone',
    'model' => '$1',
  ),
  'T-Mobile' => 
  array (
    'regex' => 'T-Mobile[ _][a-z0-9 ]+',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'T-Mobile[ _]([a-z0-9_ ]+) Build',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'T-Mobile[ _]([a-z0-9_ ]+)',
        'model' => '$1',
      ),
    ),
  ),
  'TCL' => 
  array (
    'regex' => 'TCL-([a-z0-9]+)',
    'device' => 'smartphone',
    'model' => '$1',
  ),
  'Tecno Mobile' => 
  array (
    'regex' => 'Tecno',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'Tecno ([^;/]+) Build',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'Tecno_([a-z0-9_-]+)',
        'model' => '$1',
      ),
    ),
  ),
  'teXet' => 
  array (
    'regex' => '(NaviPad [^/;]*) Build',
    'device' => 'tablet',
    'model' => '$1',
  ),
  'Telit' => 
  array (
    'regex' => 'Telit',
    'device' => 'feature phone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'Telit_Mobile_Terminals-([a-z0-9]+)',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'Telit[\\-_]?([a-z0-9]+)',
        'model' => '$1',
      ),
    ),
  ),
  'TIANYU' => 
  array (
    'regex' => 'TIANYU',
    'device' => 'feature phone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'TIANYU ([a-z0-9]+)',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'TIANYU-KTOUCH/([a-z0-9]+)',
        'model' => '$1',
      ),
    ),
  ),
  'Tolino' => 
  array (
    'regex' => 'Tolino Tab ([^/;]+) Build',
    'device' => 'tablet',
    'model' => 'Tolino Tab $1',
  ),
  'Toplux' => 
  array (
    'regex' => 'Toplux ([a-z0-9]+)',
    'device' => 'feature phone',
    'model' => '$1',
  ),
  'TVC' => 
  array (
    'regex' => '(NuclearSX-SP5)',
    'device' => 'smartphone',
    'model' => 'Nuclear SX-SP5',
  ),
  'UTStarcom' => 
  array (
    'regex' => 'utstar[ _-]?([a-z0-9]+)',
    'device' => 'feature phone',
    'model' => '$1',
  ),
  'ViewSonic' => 
  array (
    'regex' => 'ViewSonic|VSD[0-9]+ Build',
    'device' => 'smart display',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'ViewSonic-ViewPad([a-z0-9]+) Build',
        'model' => 'ViewPad $1',
        'device' => 'tablet',
      ),
      1 => 
      array (
        'regex' => '(VSD[0-9]+) Build',
        'model' => '$1',
      ),
    ),
  ),
  'Vitelcom' => 
  array (
    'regex' => 'Vitelcom|portalmmm/[12].0 TSM',
    'device' => 'feature phone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'TSM-([a-z0-9]+)',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'TSM([a-z0-9\\-]+)',
        'model' => '$1',
      ),
      2 => 
      array (
        'regex' => 'portalmmm/[12].0 (TSM[a-z0-9 ]+)',
        'model' => '$1',
      ),
    ),
  ),
  'VK Mobile' => 
  array (
    'regex' => 'VK[\\-]?([a-z0-9 ]+)',
    'device' => 'feature phone',
    'model' => '$1',
  ),
  'Vertu' => 
  array (
    'regex' => 'Vertu[ ]?([a-z0-9]+)',
    'device' => 'feature phone',
    'model' => '$1',
  ),
  'Videocon' => 
  array (
    'regex' => 'Videocon[_ ]([a-z0-9]+)',
    'device' => 'smartphone',
    'model' => '$1',
  ),
  'Voxtel' => 
  array (
    'regex' => 'Voxtel_([a-z0-9]+)',
    'device' => 'feature phone',
    'model' => '$1',
  ),
  'WellcoM' => 
  array (
    'regex' => 'WELLCOM[ _\\-/]([a-z0-9]+)',
    'device' => 'smartphone',
    'model' => '$1',
  ),
  'Wiko' => 
  array (
    'regex' => '(?:Wiko-)?(?:CINK|IGGY|Stairway|Rainbow|Highway|Darkside|Darkmoon|Darkfull|Darknight|Sublim|Ozzy|Barry)',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => '(?:Wiko-)?CINK(.*) Build',
        'model' => 'Cink$1',
      ),
      1 => 
      array (
        'regex' => '(?:Wiko-)?CINK[ _-]([a-z0-9]+)',
        'model' => 'Cink $1',
      ),
      2 => 
      array (
        'regex' => '(?:Wiko-)?IGGY(.*) Build',
        'model' => 'Iggy$1',
      ),
      3 => 
      array (
        'regex' => '(?:Wiko-)?IGGY[ _-]([a-z0-9]+)',
        'model' => 'Iggy $1',
      ),
      4 => 
      array (
        'regex' => 'Stairway',
        'model' => 'Stairway',
      ),
      5 => 
      array (
        'regex' => 'Highway',
        'model' => 'Highway',
      ),
      6 => 
      array (
        'regex' => 'Rainbow',
        'model' => 'Rainbow',
      ),
      7 => 
      array (
        'regex' => 'Darkside',
        'model' => 'Darkside',
      ),
      8 => 
      array (
        'regex' => 'Darkmoon',
        'model' => 'Darkmoon',
      ),
      9 => 
      array (
        'regex' => 'Darkfull',
        'model' => 'Darkfull',
      ),
      10 => 
      array (
        'regex' => 'Darknight',
        'model' => 'Darknight',
      ),
      11 => 
      array (
        'regex' => 'Sublim',
        'model' => 'Sublim',
      ),
      12 => 
      array (
        'regex' => 'Ozzy',
        'model' => 'Ozzy',
      ),
      13 => 
      array (
        'regex' => 'Barry',
        'model' => 'Barry',
      ),
    ),
  ),
  'Wolder' => 
  array (
    'regex' => 'miSmart|miTab',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'miSmart[ -_]?([^/]+) Build',
        'model' => 'miSmart $1',
      ),
      1 => 
      array (
        'regex' => 'miTab[ -_]?([^/]+) Build',
        'device' => 'tablet',
        'model' => 'miTab $1',
      ),
    ),
  ),
  'Wonu' => 
  array (
    'regex' => 'Wonu ([a-z0-9]+)',
    'device' => 'feature phone',
    'model' => '$1',
  ),
  'Woxter' => 
  array (
    'regex' => 'Woxter (.+) Build',
    'device' => 'tablet',
    'model' => '$1',
  ),
  'Xiaomi' => 
  array (
    'regex' => '(MI [a-z0-9]+|MI-One[ _]Plus) Build',
    'device' => 'smartphone',
    'model' => '$1',
  ),
  'Yuandao' => 
  array (
    'regex' => 'N101[ _]DUAL(?:[ _]CORE)?(?:[ _]?2|\\|\\|)?(?:[ _]V11)? Build',
    'device' => 'tablet',
    'model' => 'N101',
  ),
  'Zonda' => 
  array (
    'regex' => '(ZM(?:CK|EM|TFTV|TN)[a-z0-9]+)',
    'device' => 'feature phone',
    'model' => '$1',
  ),
  'Toshiba' => 
  array (
    'regex' => 'Toshiba|portalmmm/[12].0 TS',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'Toshiba[ /_\\-]?([a-z0-9_ -]+) Build',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'Toshiba[ /_\\-]?([a-z0-9_-]+)',
        'model' => '$1',
      ),
      2 => 
      array (
        'regex' => 'portalmmm/[12].0 (TS[a-z0-9 ]+)',
        'model' => '$1',
      ),
    ),
  ),
  'Fly' => 
  array (
    'regex' => 'Fly|MERIDIAN-',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'Fly[ _\\-]?([a-z0-9]+)',
        'model' => '$1',
      ),
      1 => 
      array (
        'regex' => 'MERIDIAN-([a-z0-9]+)',
        'model' => '$1',
      ),
    ),
  ),
  'Web TV' => 
  array (
    'regex' => 'WebTV/(\\d+\\.\\d+)',
    'device' => 'tv',
    'model' => '',
  ),
  'Zopo' => 
  array (
    'regex' => '(?:ZOPO[_ ])?(ZP[0-9]{2,}[^/;]+) Build',
    'device' => 'smartphone',
    'model' => '$1',
  ),
  'ZTE' => 
  array (
    'regex' => 'ZTE|Z331',
    'device' => 'smartphone',
    'models' => 
    array (
      0 => 
      array (
        'regex' => 'ZTE[\\- ](V98|V96A|V81|V70) Build',
        'model' => '$1',
        'device' => 'tablet',
      ),
      1 => 
      array (
        'regex' => 'ZTE[\\- ]([a-z0-9\\-_ ]+) Build',
        'model' => '$1',
      ),
      2 => 
      array (
        'regex' => 'ZTE-(?:G |G-)?([a-z0-9 _]+)',
        'model' => '$1',
      ),
      3 => 
      array (
        'regex' => 'ZTE[ _]([a-z0-9]+)',
        'model' => '$1',
      ),
      4 => 
      array (
        'regex' => 'Z331',
        'model' => 'Z331',
      ),
    ),
  ),
);
$expires_on   = 1418308847;
$cache_complete   = true;
?>