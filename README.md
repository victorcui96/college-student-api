## About this API
This CollegeStudent is an API built using PHP/Laravel and provides an easy interface for you to manage your favorite albums, NCAA basketball players, and sorting algorithms. I made this API because I found myself constantly looking up those 3 items, and I wanted an easy way to add, list, update, and delete them. Some features of this API include: 

* conforming to RESTful architectural standards, which you can read more about [here](https://developer.mailchimp.com/documentation/mailchimp/guides/an-introduction-to-rest/). 
* 3 Laravel Models
* 3 Laravel Controllers
* 3 Database migrations using Laravel
* 3 Collections of REST routes, corresponding to Albums, NCAA Basketball Players, and sorting algorithms
* Implementation of all singular REST routes **GET**, **PUT**, **POST**, and **DELETE**
* Implementation of all singular REST routes **GET**, **PUT**, **POST**, and **DELETE**
* Homepage route at / showing basic description of API, and a link to Gitbook documentation

Although you don't need to understand Laravel Models, Controllers, or database migrations in order to use the API, the curious developer can learn more about them by reading Laravel's [docs](https://laravel.com/docs/5.4). 

## Project Installation Instructions
1. Clone this repository url somewhere on your computer
```bash
# type this into your terminal inside a directory of your choice
git clone https://github.com/victorcui96/college-student-api
```
2. Open up a PHP/mySQL web server, such as MAMP. **NOTE:** Make sure the Document Root of the server is the **public** directory of the API
3. In the same directory that you cloned this repo in, type
```bash
# this will fire up a local Laravel development server on your machine
php artisan serve
```
4. Visit the URL of the server in your browser
5. Use your browser or an app like Advanced REST Client to make REST commands like **GET**, **POST**, or **PUT** to the API!

## How Database Migrations Work
Typing in
```bash
php artisan make:migration create_whatever_table
```
creates a new Database Migration, which is kind of like version control for your databases. A migration includes your schema for a mySQL table. _Running_ a migration creates the schema and stores it into your mySQL database, which you can change by modifying the .env file. The Albums, NCAA Basketball Players, and sorting algorithms each have their unique mySQL table. Of course, you can create new mySQL tables by making your own migration, then running it. To run all of your outstanding migrations, execute the following:
```bash
php artisan migrate
```