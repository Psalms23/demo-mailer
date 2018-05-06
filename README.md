# My laravel mailer

### Set up
1. run `composer install` to your terminal
2. `Add your gmail to the .env file and in config/mail.php file.` 
  Note: `Please make sure that your gmail has a less secure apps option on.`
3. `Set up the .env file for your mysql connection or db connection.`
4. `Create new schema in your mysql name it: blog.`
5. run `php artisan migrate` to your terminal. This will create our db tables.
6. run `php artisan cache:clear` and `php artisan config:clear`
7. run `php artisan key:generate` and copy and paste this code to your .env... e.g. `base64:JHWLgBQyLruS1ktULiNw+PHUuvpATk9jxS/QQ79C3/o=`
8. run `php artisan serve`.
9. Open your browser and test the app at `127.0.0.1:8000`

## For hobby purpose only :)

### By: https://github.com/Psalms23
