FROM debian:bookworm

RUN apt update && apt upgrade && apt install -y php-fpm php-mysqli curl

COPY www.conf /etc/php/8.2/fpm/pool.d/www.conf
COPY install_wp.sh .
RUN chmod +x install_wp.sh

# run the php-fpm service in the foreground using the command line -F
CMD ["./install_wp.sh"]
