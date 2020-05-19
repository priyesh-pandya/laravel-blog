<p align="center"><img src="https://gitlab.com/priyesh_pandya/laravel-blog/raw/master/public/images/blog-content-logo.png"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Laravel-Blog

Laravel-blog is build to demonstrate a simple blog application using the Laravel version 5.5, can be used to learn laravel basics operations & its functionalities. For more detail refer laravel development.


## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications.
 
## Real world laravel blog app 

A real world blog app yet simple application for demonstration purpose only which is based on Laravel version 5.5

Requirements

- Bootstrap
- Laravel 5.5.28
- Mysql >= 5.6.26
- PHP >= 5.6.4
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension 
 

## Installation

Open the GIT cli (Git - The Command Line) execute following commands in your local machine

- git clone https://gitlab.com/priyesh_pandya/laravel-blog.git
- cd laravel-blog
- composer install
- cp .env.example .env
- php artisan key:generate 


### Database

Create a new database in your local and you mysql command to create new database like Create Command

```markdown

CREATE DATABASE laravel_blog;

Change the following settings from the .env file replace your mysql server credentials, The default username for a new MySQL installation is root, with a blank password in my case.    

- DB_CONNECTION=mysql
- DB_HOST=localhost
- DB_PORT=3306
- DB_DATABASE=laravel_blog
- DB_USERNAME=root
- DB_PASSWORD=


Make sure you set the correct database connection information before running the migrations commands

- php artisan migrate
- php artisan serve

```

Now open the url http://127.0.0.1:8000/ (after PHP serve) in your web browser will run the blog app or use whatever URL you setup for this project.


Author : Priyesh Pandya

Feel free to email me, if you have any question.
 
 
## License
The demo code is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

 