FROM debian:bookworm

#"&""&" ensures that each command runs only if the previous command succeeds
# install latest apt -y confirms always yes when prompted
ENV DEBIAN_FRONTEND=noninteractive
RUN apt update 
#RUN apt upgrade
RUN apt install -y nginx 
RUN apt install -y openssl

RUN mkdir /etc/nginx/ssl

# generate certificates
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/nginx/ssl/inception.key -out /etc/nginx/ssl/inception.crt \
-subj "/C=FR/ST=Berlin/L=Berlin/O=42/OU=42/CN=rpodack.42.fr"




COPY default /etc/nginx/sites-available/default

RUN chmod 755 /var/www/html

#RUN chown -R www-data:www-data /var/www/html

CMD ["nginx", "-g", "daemon off;"]
