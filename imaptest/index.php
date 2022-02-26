<?php


$data = require_once'config.php';

$mail_handle = imap_open("{imap.gmail.com:993/ssl}", $data['mail']['username'] , $data['mail']['password']);

$headers = imap_headers($mail_handle);

// echo "<pre>";
// print_r($headers);
// echo "</pre>";

$last = imap_num_msg($mail_handle);

$mail_body = imap_body($mail_handle,3);

$struct = imap_fetchstructure($mail_handle,$last);

$bodystruct = imap_bodystruct($mail_handle,$last,TYPETEXT);

print_r($mail_body);

// echo $bodystruct;
// print_r($struct);

// echo $struct->type;

// echo $struct->encoding;


//echo "<html><head></head><body>".$mail_body."</body></html>"; 

imap_close($mail_handle); 



?>