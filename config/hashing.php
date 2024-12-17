<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Hashing Driver
    |--------------------------------------------------------------------------
    |
    | Laravel provides multiple hashing "drivers" for you to choose from.
    | By default, we will use Bcrypt, but you may use Argon2 if desired.
    |
    */

    'driver' => env('HASHING_DRIVER', 'bcrypt'),

    /*
    |--------------------------------------------------------------------------
    | Bcrypt Options
    |--------------------------------------------------------------------------
    |
    | Here you may specify the options you wish to use when hashing passwords
    | using the Bcrypt algorithm. You may modify these options based on your
    | server capabilities or your application's requirements.
    |
    */

    'bcrypt' => [
        'rounds' => env('BCRYPT_ROUNDS', 10),
    ],

    /*
    |--------------------------------------------------------------------------
    | Argon Options
    |--------------------------------------------------------------------------
    |
    | If you choose to use Argon2 for hashing, you may configure the options
    | for the Argon2 algorithm. The options are set to their default values
    | here, but you are free to adjust them if necessary.
    |
    */

    'argon' => [
        'memory' => 1024,
        'time' => 2,
        'threads' => 2,
    ],

];
