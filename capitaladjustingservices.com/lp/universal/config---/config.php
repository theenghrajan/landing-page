<?php
/**
 * Created by PhpStorm.
 * User: XperSona
 * Date: 2/12/2019
 * Time: 11:10
 */

const CONFIG = [
    /*
    |--------------------------------------------------------------------------
    | TEST MODE When enabled mails will not be sent
    | Output of the request will be sent in json format
    |--------------------------------------------------------------------------
    */
    'test_mode' => false,

    /*
    |--------------------------------------------------------------------------
    | Site Info
    |--------------------------------------------------------------------------
    |
    | 1. Title: Name of the Site will be displayed in content and subject line
    | 2. Phone: Phone Number Eg.(555) 256723
    |
    */

    'site_title' => 'Capital Adjusting Services',
    'tag_line' => '',
    'phone' => '800-845-3952',
    'site_url' => 'http://capitaladjustingservices.com/lp', // ABSOLUTE_PATH // Do NOT add trailing slash '/'

    'site_email' => 'info@capitaladjustingservices.com', // Leave Blank or comment for no email in footer
   'link_facebook' => 'https://www.facebook.com/capitaladjustingservices/', // Leave Blank or comment for no icon and no link
    'link_linkedin' => 'https://www.linkedin.com/company/capital-adjusting-services/', // Leave Blank or comment for no icon and no link


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
        'info@capitaladjustingservices.com' => 'Capital Adjusting Services'
    ],

    /*
    |--------------------------------------------------------------------------
    | Email Reply To Address [Leave Blank for same as FROM_ADDRESS]
    |--------------------------------------------------------------------------
    | 'john@example.com' => 'John Doe'
    |
    */
    'reply_to' => [
//        'prshnx@gmail.com' => 'Persona'
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
       // 'info@capitaladjustingservices.com' => 'Capital Adjusting Services'
        'frontend@smartsites.com' => 'SmartSites Nepal'
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
        'smtp_email' => 'frontend@smartsites.com',
        'smtp_password' => 'Sm@rtsites1212',

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

const THEME_DIR = __DIR__ . '/../mailer/theme/theme-1'; //Do NOT add end slash '/'

function successMessage()
{
    $phone = empty(CONFIG['phone']) ? '' : CONFIG['phone'];
    $tel = preg_replace('/[^0-9]/', '', $phone);
    return "<div class='thank-you-message'><p class='thank-you-heading'>Thank you for contacting " . CONFIG['site_title'] .
        ".</p> <p class='thank-you-content'>We will reach out to you within one business day. Want to hear from us sooner? <br>Contact us at " .
        "<a href='tel:" . $tel . "'>" . $phone . " </a> for immediate service.</p>";
}



/*
 * Useful Keys

    'email' => 'vaskarteam@smartsites.com',
    'password' => 'smartsites1231234',

 'smtp_email' => 'smartsitesmailer@gmail.com',
 'smtp_password' => 'U9LxoBPcW3CH',


 */