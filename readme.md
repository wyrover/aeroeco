## Test Installation - Just for me

This is an Laravel 5.1 application. It assumes you have node, npm, bower and gulp installed globally. (You can test for each in the Terminal with node -v, npm -v, bower -v, and gulp -v)

## Installation

* Clone repo to local environment
* From the webroot, run ```composer install```
* From the webroot, run ```touch .env```
* Edit /.env (match your own setting, if necessary)

```
APP_ENV=local
APP_DEBUG=true
APP_KEY=SomeRandomStringWith32Characters
    
DB_HOST=localhost
DB_DATABASE=your-database-name
DB_USERNAME=your-mysql-username
DB_PASSWORD=your-mysql-password
```

* Create an empty database named the same as above
* From the webroot, run ```php artisan key:generate```
* From the webroot, run ```php artisan migrate```
* From the webroot, run ```php artisan migrate:refresh --seed```
* From the webroot, run ```composer update```
* From the webroot, run ```npm install```
* From the webroot, run ```bower install```

## Please Note: Unusual Configuration

* With most Laravel applications, you point your document root to the /public folder. **HOWEVER**, this app is set up to run from the document root.
