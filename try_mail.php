<?php

require  'classAutoLoad.php';

$mailCnt = [
    'name_from' => 'Duane Barrack Makedi',
    'mail_from' => 'barrackmakedi@gmail.com',
    'name_to' => 'Makedi Duane Barrack',
    'mail_to' => 'duane.makedi@strathmore.edu',
    'subject' => 'Welcome to LAWLINK',
    'body' => 'This is your new beggining, <b>let\'s make it great!</b>'
];

$ObjSendMail->Send_Mail($conf, $mailCnt);