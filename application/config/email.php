<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Email
| -------------------------------------------------------------------------
| This file lets you define parameters for sending emails.
| Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/libraries/email.html
|
*/

$config['protocol']     = 'smtp';
$config['smtp_host']    = 'ssl://smtp.googlemail.com';
$config['smtp_port']    = 465;
$config['smtp_timeout'] = '30';
$config['smtp_user']    = 'dialemail12345@gmail.com';
$config['smtp_pass']    = '123123123qwe';

$config['mailtype'] = 'html';
$config['charset'] = 'iso-8859-1';
$config['newline'] = "\r\n";

/* End of file email.php */
/* Location: ./application/config/email.php */