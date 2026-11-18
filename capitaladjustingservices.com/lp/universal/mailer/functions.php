<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2/14/2019
 * Time: 11:55
 */

require __DIR__.'/../vendor/autoload.php';
require_once __DIR__ . '/../config/config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as MailerException;

function sendSMTPMail($subject, $body, $to = [], $debug = false)
{
    if (empty($to)) {
        $to = CONFIG['to'];
        $adminEmail = true;
    }

    $from = empty(CONFIG['from']) ? [CONFIG['smtp']['smtp_email'] => CONFIG['site_title']] : CONFIG['from'];
    $reply_to = empty(CONFIG['reply_to']) ? $from : CONFIG['reply_to'];
    $cc = empty(CONFIG['cc']) ? [] : CONFIG['cc'];

    try {
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPAuth = CONFIG['smtp']['smtp_auth'];
        $mail->SMTPDebug = $debug ? 3 : 0;
        $mail->SMTPSecure = CONFIG['smtp']['smtp_secure'];
        $mail->Host = CONFIG['smtp']['smtp_host'];
        $mail->Port = CONFIG['smtp']['smtp_port'];
        $mail->Username = CONFIG['smtp']['smtp_email'];
        $mail->Password = CONFIG['smtp']['smtp_password'];


        foreach ($from as $email => $name)
            $mail->setFrom($email, $name);

        foreach ($to as $email => $name)
            $mail->addAddress($email, $name);

        foreach ($reply_to as $email => $name)
            $mail->addReplyTo($email, $name);

        if (!empty($adminEmail))
            foreach ($cc as $email => $name)
                $mail->addCC($email, $name);

        $mail->Subject = $subject;
        $mail->AltBody = $subject;
        $mail->msgHTML($body);
        if (!$mail->send()) {
            echo "<h1>Error Sending Email</h1>";
            echo $mail->ErrorInfo;
        } else {
            if ($debug)
                echo "<h1>Mail Sent</h1>";
            if (isset($adminEmail))
                echo successMessage();
        }

    } catch (MailerException $e) {
        echo 'Message: ' . $e->getMessage();
    }
}

function renderAutoResponder($first_name)
{
    ob_start();
    require_once THEME_DIR . '/auto-respond.php';
    return ob_get_clean();

}

function renderAdminEmail($user_data)
{
    ob_start();
    require_once THEME_DIR . '/admin-message.php';
    return ob_get_clean();

}

function autoResponder($email, $first_name, $debug = false)
{
    sendSMTPMail('Message Received! - ' . CONFIG['site_title'], renderAutoResponder($first_name), [$email => $first_name], $debug);
}