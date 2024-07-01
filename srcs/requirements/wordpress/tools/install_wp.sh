#!/bin/bash

cd /var/www/html

curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar

chmod +x wp-cli.phar
./wp-cli.phar core download --allow-root --path='/var/www/html'

./wp-cli.phar config create --allow-root  --dbname=wordpress --dbuser='db_user' --dbpass='db_password' --dbhost=mariadb:3306 --path='/var/www/html'

./wp-cli.phar core install --allow-root  --url=$DOMAIN_NAME --title=inception --admin_user=$(<"/run/secrets/wp_admin_user") --admin_password=$(<"/run/secrets/wp_admin_password") --admin_email=rpodack@student.42berlin.de --path='/var/www/html'

./wp-cli.phar theme install --allow-root twentytwentytwo --activate --path='/var/www/html'

chmod 755 /var/www/html

php-fpm8.2 -F

