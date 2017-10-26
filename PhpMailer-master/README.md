***** Settings Before using PHPMailer *****


WAMP (Windows):
===============
 - First you have to edit the "php.ini".
 - To find this file run following code from the WAMP server. 
 - Create one php file [setting.php] inside C:/wamp/www/ and add the following content to that file.

    <?php  echo phpinfo();   ?>
 
 - Type http://localhost/setting.php at browser.
 - In that page search for "Loaded Configuration File". That will be the path to your php.ini.
 - In php.ini file remove the ;(semi colon) given to "extension=php_openssl.dll". 

 - Now Copy the files into your project folder i.e C:/wamp/www/   
 - Change the mail id and body content of index.php as your need.

 - Got to browser and type http://127.0.0.1/PHPMailer/

LAMP (Linux):
============
 - Copy the files into your Document root folder i.e /var/www
 - You can change this Document Root. 
 - To do this visit my blog. http://shashidharkulal.wordpress.com
 - Change the mail id and body content of index.php as your need. 

- Got to browser and type http://127.0.0.1/PHPMailer/

-----------------------------------------------------
For help mail me : shashidharkulal@gmail.com
My blog : http://shashidharkulal.wordpress.com
-----------------------------------------------------
PhpMailer @ github By Shashidhark
