<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://strathmore.edu/wp-content/uploads/2019/08/University-Logo-Black-12.png" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About AMS- XPRO

An improved Academic Management System for Strathmore University. This improved system aims at

- Student Profiles
- Student Courses and their coursework marks
- Fee statements for students and received receipts
- Tracking of student's class attendance
- Dowloading of progress reports and abstracting data per year
- Downloading of Exam cards during exam periods
- Documenting Mentoring sessions between students and their mentors



## Installation

You will first of all need to install composer dependencies that rely the application relies on. Run the follwoing command:

composer install

Then you will need to set up the database. Run the follwoing command

php artisan migrate

Then import pre-existing data into the database by running

php artisan db:seed

## Log In and Try out Some Stuff
Login with any of the accounts located in the User Seeder which have a default password of 12345678


## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
