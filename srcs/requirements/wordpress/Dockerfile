FROM debian:bookworm

RUN apt update 
RUN apt install -y php-fpm php-mysqli curl

COPY conf/www.conf /etc/php/8.2/fpm/pool.d/www.conf
COPY tools/install_wp.sh .
RUN chmod +x install_wp.sh

# Install tini
RUN apt-get update && apt-get install -y tini

# Use tini as the entrypoint
ENTRYPOINT ["/usr/bin/tini", "--"]

# run the php-fpm service in the foreground using the command line -F
CMD ["./install_wp.sh"]

