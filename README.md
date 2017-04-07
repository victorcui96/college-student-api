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

## Learning Laravel

Laravel has the most extensive and thorough documentation and video tutorial library of any modern web application framework. The [Laravel documentation](https://laravel.com/docs) is thorough, complete, and makes it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 900 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](http://patreon.com/taylorotwell):

- **[Vehikl](http://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Styde](https://styde.net)**
- **[Codecourse](https://www.codecourse.com)**
- [Fragrantica](https://www.fragrantica.com)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
