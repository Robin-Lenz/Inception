FROM debian:bookworm

# install latest apt -y confirms always yes when prompted
RUN apt update 
RUN apt install -y nginx 
RUN apt install -y openssl

RUN mkdir /etc/nginx/ssl

# generate certificates
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/nginx/ssl/inception.key -out /etc/nginx/ssl/inception.crt \
-subj "/C=FR/ST=Berlin/L=Berlin/O=42/OU=42/CN=rpodack.42.fr"

COPY conf/default /etc/nginx/sites-available/default

RUN chmod 755 /var/www/html

CMD ["nginx", "-g", "daemon off;"]
