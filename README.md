1 - git clone https://github.com/thernlovendev/xogas-users-api.git

2 - composer install 

3 - copy the file .env.example and rename .env

4 - update the .env with the credentials of database Example:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=xogos
DB_USERNAME=root
DB_PASSWORD=12345678

5 - in the terminal 

<code> php artisan migrate <code>
<code> php artisan serve <code>