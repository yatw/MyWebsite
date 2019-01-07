# Make a WordPress website that run on your local XAMPP server

This readme go through the steps to set up the website (both WordPress and XAMPP). The purpose is to remind myself, but can also be used as a tutorial.

My website use the OceanWP theme and the pages are constructed with plug-in elemator

The steps are based from the follow tutorial:  https://www.youtube.com/watch?v=CTQN2HdjvYo&index=3&list=LLR09ML-hj11Xk-crqwoJGMw&t=0s

Step Number | Procedure
------------ | -------------
1 | Install XAMPP
2 | Install WordPress
3 | Move WordPress folder into XAMPP/htdocs folder, name it your website's name
4 | In your browswer, go to localhost/phpmyadmin
5 | Inside phpmyadmin, create database with utf8-general-ci
6 | Go to localhost/your-website-name, WordPress page will greet you
7 | Connect WordPress to database, default should be username-> root, password-> blank
8 | Access your website through localhost/your-website-name/wp-login.php

DONE! Now you can make this website using WordPress's feature from scratch

I recommand this tutorial made by Tyler Moore, he go through the basic of WordPress and plug-in features step by step: https://www.youtube.com/watch?v=2cbvZf1jIJM&index=6&list=LLR09ML-hj11Xk-crqwoJGMw

***
If you have an existing WordPress site and want to transfer into this wordpress site, you can use plug-in All-in-One WP Migration

Step Number | Procedure
------------ | -------------
1 | Install and Activate plug-in All-in-One WP Migration (on both website)
2 | The idea is to export from website 1 as a file, and import that file to website 2
3 | By default XAMPP maximum file upload size is 2MB, which will prevent you from uploading your existing site
4 | Fix: increase maximum size by finding xampp/php/php.ini 
5 | Change variable value, post_max_size = 512M, upload_max_filesize = 512M, max_execution_time = 5000, max_input_time = 5000, memory_limit = 1000M. Tutorial:http://www.coverpoint.xyz/increase-the-import-file-size-limit-in-phpmyadminxamppwamp/
6 | Restart server (exit XAMPP control and come back to this plug-in again), now the maximum size should have increased
7 | After import complete, DO NOT CLOSE
8 | Click change perminlink, login with the importing database password, confirm the perminlink TWICE
9 | Done, now this site has everything the other site has