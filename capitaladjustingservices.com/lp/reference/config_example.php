<?php
/**
 * Created by PhpStorm.
 * User: XperSona
 * Date: 2/12/2019
 * Time: 11:10
 */

return [
    /*
   |--------------------------------------------------------------------------
   | Site Info
   |--------------------------------------------------------------------------
   |
   | 1. Title: Name of the Site will be displayed in content and subject line
   | 2. Phone: Phone Number Eg.(555) 256723
   |
   */

    'site_title' => 'Site Title',

    'phone' => '(555) 256723',

    /*
    |--------------------------------------------------------------------------
    | Email From Address [Leave Blank for same as SMTP_EMAIL]
    |--------------------------------------------------------------------------
    | Use the same as smtp_email to be in safe side
    | EG:
    | 'john@example.com' => 'John Doe'
    |
    */
    'from' => [
        //'john@example.com' => 'John Doe'
    ],

    /*
    |--------------------------------------------------------------------------
    | Email Reply To Address [Leave Blank for same as FROM_ADDRESS]
    |--------------------------------------------------------------------------
    | 'john@example.com' => 'John Doe'
    |
    */
    'reply_to' => [
        //'john@example.com' => 'John Doe'
    ],

    /*
    |--------------------------------------------------------------------------
    | Send Email To  Array() Only One
    |--------------------------------------------------------------------------
    | Send Emails to  use only one and use CC for others
    | EG:
    | 'john@example.com' => 'John Doe'
    |
    */
    'to' => [
        'john@example.com' => 'John Doe'
    ],
    /*
    |--------------------------------------------------------------------------
    | CC Email To  Array() Multiple
    |--------------------------------------------------------------------------
    | Send Emails to using CC
    | EG:
    | 'john@example.com' => 'John Doe'
    |
    */
    'cc' => [
        //'user1@example.com' => 'User One Name',
        //'user2@example.com' => 'User Two Name'
    ],

    /*
    |--------------------------------------------------------------------------
    | SMTP Information [Login Credentials]
    |--------------------------------------------------------------------------
    | Send Emails using following SMTP Credentials
    | Ports are assigned in smtp_config.php
    |
    */
    'smtp' => [
        'email' => 'user@gmail.com',
        'password' => 'gmailPassword',
        /*
         * Be Careful below this Line
         * Don't change is you don't know what you're doing
         */
        'smtp_auth' => true,
        'smtp_secure' => 'tls',
        'smtp_host' => 'smtp.gmail.com',
        'smtp_port' => 587
    ]
];

/*
 * Useful Keys


'site_title' => 'Alpine Ridge Mountainside Site',
'email' => 'vaskarteam@smartsites.com',
'password' => 'smartsites1231234',

'email' => 'alpineridgemountainside@gmail.com',
'password' => 'Alpine1490',


 */



