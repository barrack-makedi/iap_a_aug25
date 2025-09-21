<?php
// site timezone
$conf['site_timezone']='AFRICA/NAIRBI';
// site information
$conf['site_name'] = 'LAWLINK';
$conf['site_url'] = 'http://localhost/iap_a_aug25';
$conf['site_email']= 'lawlink.com';
//Site language
$conf['site_lang']= 'en';
//Database Constants
$conf[' DB_TYPE'] = 'mysqli';
$conf['DB_HOST'] = 'localhost';
$conf['DB_USER']='root';
$conf['DB_PASS']='';
$conf['DB_NAME']='test_db';
// Email configuration
$conf['mail_type'] = 'smtp'; // mail or smtp
$conf['smtp_host'] = 'smtp.gmail.com'; // SMTP Host Address
$conf['smtp_user'] = 'barrackmakedi@gmail.com'; // SMTP Username
$conf['smtp_pass'] = 'phxo oxpg kegq rghl'; // SMTP Password
$conf['smtp_port'] = 465; // SMTP Port - 587 for tls, 465 for ssl
$conf['smtp_secure'] = 'ssl'; // Encryption - ssl or tls


// Valid domain
$conf['valid_domain'] = ['gmail.com', 'lawlink.com', 'yahoo.com', 'outlook.com', 'strathmore.edu'];

// Valid password length
$conf['valid_password_length'] = 8;
?>