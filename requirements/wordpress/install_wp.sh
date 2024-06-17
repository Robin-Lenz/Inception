#!/bin/bash
cd /var/www/html
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar
./wp-cli.phar core download --allow-root
./wp-cli.phar config create --dbname=wordpress --dbuser=robin --dbpass=123456 --dbhost=mariadb --allow-root
./wp-cli.phar core install --url=localhost --title=inception --admin_user=robin --admin_password=123456 --admin_email=lenz-podack@freenet.de --allow-root
./wp-cli.phar theme install twentytwentyone --activate --allow-root



php-fpm8.2 -F
