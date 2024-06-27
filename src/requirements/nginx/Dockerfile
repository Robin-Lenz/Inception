FROM debian:bookworm

#"&""&" ensures that each command runs only if the previous command succeeds
# install latest apt -y confirms always yes when prompted
RUN apt update && apt upgrade && apt install -y \
nginx \
openssl

RUN mkdir /etc/nginx/ssl

# generate certificates
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/nginx/ssl/inception.key -out /etc/nginx/ssl/inception.crt \
-subj "/C=FR/ST=Berlin/L=Berlin/O=42/OU=42/CN=rpodack.42.fr"

#RUN ln -s /etc/nginx/sites-available/rpodack.42.fr /etc/nginx/sites-enabled/


COPY default /etc/nginx/sites-available/default


CMD ["nginx", "-g", "daemon off;"]
