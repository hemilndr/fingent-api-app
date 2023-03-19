<p align="center">This is a simple API project built with Laravel. The API provides endpoints for basic get user details  operations on a database of user.

</p>
<p> Laravel Framework 9.52.4</p>

<p> For server requirements please visit <a href="https://laravel.com/docs/9.x/installation">laravel docs</a></p>

<h1>Steps <h1>
1.git clone https://github.com/hemilndr/fingent-api-app.git

2.composer instal 

3.Create a new MySQL database and update the .env file with your database credentials:


DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
4. etner command php artisan key:generate
5.Run database migrations and seed the database with sample data:

php artisan migrate
php artisan db:seed

php artisan serve




The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
