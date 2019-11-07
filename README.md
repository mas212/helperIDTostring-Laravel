Fakeid -> helper Laravel
--------------------------
Example :
id   = 1 

to
 id = 1676

use helper FakeId:

Create folder Helpers
App\Helpers

Config :
    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'aliases' => [
        'Fakeid' => App\Helpers\Fakeid::class,
    ],

];
