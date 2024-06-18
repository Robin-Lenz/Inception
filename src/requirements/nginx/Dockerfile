FROM debian:bookworm

#"&""&" ensures that each command runs only if the previous command succeeds
# install latest apt -y confirms always yes when prompted
RUN apt update && apt upgrade && apt install -y \
nginx

COPY default /etc/nginx/sites-available/default


CMD ["nginx", "-g", "daemon off;"]
