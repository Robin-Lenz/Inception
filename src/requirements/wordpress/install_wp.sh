#!/bin/bash

cd /var/www/html
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar
./wp-cli.phar core download --allow-root --path='/var/www/html'

./wp-cli.phar config create --allow-root  --dbname=wordpress --dbuser=$(<"/run/secrets/wp_user") --dbpass=$(<"/run/secrets/wp_user_password") --dbhost=mariadb --path='/var/www/html'

./wp-cli.phar core install --allow-root  --url=$DOMAIN_NAME --title=inception --admin_user=$(<"/run/secrets/wp_admin_user") --admin_password=$(<"/run/secrets/wp_admin_password") --admin_email=e-mail@admin.com --path='/var/www/html'

./wp-cli.phar theme install --allow-root twentytwentytwo --activate --path='/var/www/html'



php-fpm8.2 -F
