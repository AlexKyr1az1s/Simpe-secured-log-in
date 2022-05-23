# Secured Log in 

This is a Sign in and Sign up web application built in a locall host written with PHP, HTML and CSS

To set up on a device:

1. Install XAMP

2. Download the dashboard file 

3. Run XAMP

4. On the right side there is the button explorer, click it and open the htdocks file

5. If there is no older project that needs to be saved replace the dashboard folder with the downloaded one.

6. On XAMP start Apache and MySQL

7. go to http://localhost/phpmyadmin/index.php?route=

8. select SQL on the top left and run the following queries to create the local database
8.1. CREATE DATABASE LoginSystem;

8.2. CREATE TABLE IF NOT EXISTS `users` (

 `id` int(11) NOT NULL AUTO_INCREMENT,
 
 `username` varchar(50) NOT NULL,
 
 `email` varchar(50) NOT NULL,
 
 `password` varchar(50) NOT NULL,
 
 `adminauth` boolean NOT NULL,
 
 `create_datetime` datetime NOT NULL,
 
 PRIMARY KEY (`id`)
);

9. On the left side of the now stop button click the admin button that opens the web aplocation
 
 
To inspect the code use a code editor that suports PHP, HTML and CSS (Two of choices are Notepad++ and Visual Studio Code)

Navigate to the dashboard folder that was replaced and all pages are shown.

## Authors

- [@AlexKyr1az1s](https://github.com/AlexKyr1az1s)

