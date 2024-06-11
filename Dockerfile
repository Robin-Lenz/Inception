FROM debian:latest

RUN apt update && apt upgrade && apt install -y php-fpm

# run the php-fpm service in the foreground using the command line -F
CMD ["php-fpm8.2", "-F"]
