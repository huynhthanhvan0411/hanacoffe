# HanaCoffe 

HanaCoffe Online Shopping PHP MVC Project

## Create by Huynh Thanh Van 

## Installation guide

- Prerequisite: xampp. Download xampp and run. Project runs stably with xampp ver 7.3.28
- Or you can use Laragon but need version is php 7.3.28 
- Create database name: localhost/phpmyadmin -> create database hana
- Open phpmyadmin and execute query in Core/hana.sql
- Modify file Core/Database.php
    + Change port from 3307 to your mysql port (e.g. 3306) skip this step if already 3306
- Access localhost/HanaCoffe to start (Move folder HanaCoffe into htdocs if you use xampp, laragn/www)

## Login account

- For customer site: 
  + Email: phucnguyen1@example.com
  + Pass:  123456789
- For admin site: 
  + Email: admin2@example.com
  + Pass:  12345678
