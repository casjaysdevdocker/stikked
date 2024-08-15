<?php if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

$config['site_name'] = 'REPLACE_STIKKED_SITE_NAME';
$config['base_url'] = 'REPLACE_SERVER_PROTO://REPLACE_SERVER_NAME/';

$config['db_driver'] = 'sqlite';    # sqlite
$config['db_database'] = 'REPLACE_DATABASE_DIR'; #/var/lib/httpd/stikked/data.db
$config['db_hostname'] = 'localhost';
$config['db_username'] = 'root';
$config['db_password'] = 'DATABASE_PASS_ROOT';
$config['db_prefix'] = '';

//Currently: default, bootstrap, gabdark, gabdark3, geocities, snowkat, stikkedizr, cleanwhite, i386
$config['theme'] = 'default';
$config['qr_enabled'] = true;
$config['js_editor'] = 'ACE'; // codemirror, ace, ''
$config['language'] = 'english';
$config['combine_assets'] = true;
$config['content_expiration'] = '-1 week';
$config['cron_key'] = 'REPLACE_STIKKED_CRON_KEY';
$config['url_shortening_use'] = 'off';
$config['random_url_engines'] = 'googl,bitly'; // Used only in random mode, read comment above for more info
$config['yourls_url'] = '';
$config['yourls_signature'] = '';
$config['gwgd_url'] = '';
$config['shorturl_selected'] = false;
$config['googl_url_api'] = '';
$config['bitly_url_api'] = '';
$config['polr_url'] = '';
$config['polr_api'] = '';
$config['backup_user'] = 'root';
$config['backup_pass'] = 'REPLACE_STIKKED_ADMIN_PASS';
$config['per_page'] = 15;
$config['apikey'] = '';
$config['soft_api'] = false;
$config['private_only'] = false;
$config['enable_captcha'] = true;
$config['recaptcha_publickey'] = '';
$config['recaptcha_privatekey'] = '';
$config['disable_api'] = false;
$config['disable_keep_forever'] = false;
$config['blocked_words'] = '';
$config['disable_shorturl'] = false;
$config['disallow_search_engines'] = false;
$config['spamadmin_user'] = 'root';
$config['spamadmin_pass'] = 'REPLACE_STIKKED_ADMIN_PASS';
$config['default_expiration'] = 0;
$config['default_language'] = 'text';
$config['unknown_poster'] = 'Anonymous';
$config['unknown_title'] = 'New Paste';
$config['require_auth'] = false;
$config['displayurl_override'] = '';
$config['nouns'] = array(
  'Hornbill',
  'Elephant',
  'Bison',
  'Lion',
  'Camel',
  'Sheep',
  'Monkey',
  'Prairie Dog',
  'Plover',
  'Tapir',
  'Capybara',
  'Cheetah',
  'Flamingo',
  'Peccary',
  'Eider',
  'Porcupine',
  'Pelican',
  'Dove',
  'Crane',
  'Tortoise',
  'Agouti',
  'Tamarin',
  'Pheasant',
  'Owl',
  'Gibbon',
  'Goose',
  'Baboon',
  'Hamerkop',
  'Zebra',
  'Macaw',
  'Gibbon',
  'Madrill',
  'Wolf',
  'Stork',
  'Armadillo',
  'Ostrich',
  'Marmoset',
  'Lizard',
  'Panda',
  'Giraffe',
  'Cassowary',
  'Kangaroo',
  'Gorilla',
  'Pheasant',
  'Finch',
  'Duck',
  'Matamata',
  'Teal',
  'Macaque',
  'Goat',
  'Lechwe',
  'Ibis',
  'Parrot',
  'Parakeet',
  'Bongo',
  'Pudu',
  'Echidna',
  'Lemur',
  'Bat',
  'Curlew',
  'Terrapin',
  'Peafowl',
  'Duck',
  'Owl',
  'Parakeet',
  'Meerkat',
  'Tern',
  'Wigeon',
  'Pintail',
  'Meerkat',
  'Motmot',
  'Motmot',
  'Shama',
  'Dormouse',
  'Horse',
  'Rhinoceros',
  'Sloth',
  'Mousedeer',
  'Treeshrew',
  'Bushbaby',
  'Guinea Pig',
  'Agouti',
  'Water Vole',
  'Hog',
  'Pig',
  'Anoa',
  'Octupus',
  'Butterfly',
  'Cat',
  'Kitten',
  'Coyote',
  'Crocodile',
  'Cockroach',
  'Crow',
  'Bird',
  'Dolphin',
  'Earthworm',
  'Frog',
  'Hamster',
  'Hedgehog',
  'Hog',
  'Human',
  'Hummingbird',
  'Iguana',
  'Leech',
  'Leopard',
  ' Marten',
  'Mockingbird',
  'Mockingjay',
  'Mosquito',
  'Moth',
  'Partdridge',
  'Bee',
  'Penguin'
);

$config['adjectives'] = array(
  'Ample',
  'Mature',
  'Bulky',
  'Burly',
  'Capacious',
  'Colossal',
  'Commodious',
  'Thundering',
  'Mammoth',
  'Mungo',
  'Voluminous',
  'Walloping',
  'Tiny',
  'Baby',
  'Bitty',
  'Diminutive',
  'Little',
  'Paltry',
  'Scanty',
  'Trivial',
  'Scribby',
  'Blush',
  'Tinct',
  'Colorant',
  'Aqua',
  'Beige',
  'Bistre',
  'Buff',
  'Bistre',
  'Chartreuse',
  'Chocolate',
  'Cobalt',
  'Coral',
  'Cream',
  'Crimson',
  'Denim',
  'Emerald',
  'Gray',
  'Gamboge',
  'Ivory',
  'Mustard',
  'Silly',
  'Perl',
  'Whipped',
  'Violet',
  'Harmless',
  'Gentle',
  'Innocent',
  'Reliable',
  'Unreliable',
  'Soft',
  'Toxic',
  'Anorexic',
  'Beefy',
  'Sexy',
  'Morose',
  'Rude',
  'Ungracious',
  'Abrupt',
  'Gracious',
  'Queen',
  'Cute',
  'Edgy',
  'Insensitive',
  'Round',
  'Sharp',
  'Gruff',
  'Subtle',
  'Crippled',
  'Eratic',
  'Social',
  'Jittery',
  'Sole',
  'Unique',
  'Botched',
  'Tacky',
  'Sludgy',
  'Stained',
  'Wet',
  'Soiled',
  'Big',
  'Small',
  'Sloppy',
  'Smelly',
  'Funky',
  'Putrid',
  'Melodic',
  'Corrupt',
  'Lousy',
  'Fiery',
  'Red',
  'Sweet',
  'Hot',
  'Scorching',
  'Sweltering',
  'Torrid',
  'Obese',
  'Speedy',
  'Flying',
  'Idiotic',
  'Chunky',
  'Forensic'
);

$config['expires'] = array(
  'expire',
  'perish',
  'go to its last resting place',
  'go to meet its maker',
  'cross the great divide',
  'slip away',
  'give up the ghost',
  'kick the bucket',
  'croak',
  'bite the big one',
  'check out',
  'buy the farm',
  'join the choir invisible',
  'shuffle off the mortal coil',
  'hop the perch',
  'run down the curtain',
  'die',
  'self destruct',
  'explode'
);
