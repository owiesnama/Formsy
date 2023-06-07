<h1 align="center">Formsy</h1>
<p align="center">Design, Build and Share Froms</p>
<hr/>

# Introduction
<p>
    Formsy is a simple web application for creating online forms, users can build forms, share it and see recent forms published by others.
    It's build with <a href="https://laravel.com/">Laravel</a>, <a href="https://vuejs.org/">Vue Js</a> and <a href="https://inertiajs.com/">Inertia Js</a> 
</p>
<p> You can see live demo on <a href="https://formsy.elnama.net">Formsy</a> </p>


# Server Requirements
The Laravel framework has a few system requirements. You should ensure that your web server has the following minimum PHP version and extensions:
- PHP >= 8.1
- Ctype PHP Extension
- cURL PHP Extension
- DOM PHP Extension
- Fileinfo PHP Extension
- Filter PHP Extension
- Hash PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PCRE PHP Extension
- PDO PHP Extension
- Session PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
# Installation
Formsy is a Laravel application at the end of the day, nothing fancy all you need is to follow the same proccess of installing any laravel application
- clone the repo
    ``` git clone https://github.com/owiesnama/formsy ```
- Install dependancies using composer 
    ``` composer install ```
- Setup env variables 
    ``` cp .env.example .env ```
- Install NPM dependancies 
    ``` npm i ```
- Migrate Database
    ``` php artisan migrate ```
- Build node_modules 
    ``` npm run build ```
- Serve the application
    ``` php artisan server ```

# Testing 
You can run the application test running the following command on the application directory
``` ./vendor/bin/phpunit ```