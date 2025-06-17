# stop supervisor
supervisorctl stop bytoken

# maintenance mode on
php artisan down

# update database
php artisan migrate --force

# optimize laravel classes, routes, controllers e etc.
php artisan optimize:clear
php artisan optimize

# maintenance mode off
php artisan up

# refresh php class files
yes | composer dumpautoload

#restart supervisor
supervisorctl start bytoken