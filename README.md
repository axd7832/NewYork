# Workflow Team New York

## What you need to get started
* Node + NPM
* PHP 7.3 ([Windows instructions to run PHP on command line](http://php.net/manual/en/install.windows.legacy.index.php#install.windows.legacy.commandline))
* [Composer](https://getcomposer.org/ "Composer")
* [Laravel](https://laravel.com/docs/4.2/quick "Laravel")
* [MySql](https://dev.mysql.com/downloads/file/?id=483310 "MySql")

The Laravel link has the instructions that you need to download Composer. Once you have all of the following installed and ready to go see: [Repository Setup](#How-To-Get-The-Repository-Working)

* NOTE: if you are having trouble with installing anything above, another alternative is [Laravel Homestead](https://laravel.com/docs/5.7/homestead). This is an environment that will do all the setup above for you. 

## How To Get The Repository Working 
1. Clone the Repo
2. Run `npm install` to get the required dependencies
3. Run `composer update --no-scripts`
4. Run `php artisan key:generate`
5. Follow the instructions for [Database-Setup](#Database-Setup)
6. Run `php artisan serve` to start the PHP Dev Server. This is what will build the php files.
7. In another tab, Run `npm run watch` to start the Vue Dev Sever (Builds Vue.js files into html on save of the files)
8. The server should now be running on `localhost:8000`

## Database Setup

For this, we will be using mysql. 
After you have downloaded mysql: 
* create a password for the root user and don't forget it. Note: DO NOT SELECT SHA2 PASSWORD CACHING WHEN IT PROMPTS YOU. (Laravel does not support it!)
* Log into the database shell with `mysql -u root -p`. This will then prompt you to enter your password.
* Enter your password.
* Create the database `create database NewYork`
* Now go back to your code and copy the `.env.example` file and rename it `.env`. This is the private variables that we do not want to get into the repository. We need to change the default DB_DATABASE, DB_USERNAME, and DB_PASSWORD. It should look something like ```DB_DATABASE=NewYork
DB_USERNAME=root
DB_PASSWORD=YOUR_PASSWORD```
* Once this is completed, you can now run `php artisan migrate --seed`. Note: Use `php artisan migrate:refresh --seed` to clear the database and populate with testing data (When we set that up). This is very useful if there are changes made by one developer. It will sync our databases.
* ** If are getting an error connecting- you have either entered either the db name, db username, or db passord wrong or you managed to use sha2 password caching for mysql. If you have ensured that all of the db names are correct, then you have likely use mysql sha2 password caching and laravel will not be able to connect. To fix this- Log into the mysql shell `mysql -u root -p` and then Run `ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'YOUR_PASSWORD';`