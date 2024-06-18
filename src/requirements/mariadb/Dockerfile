FROM debian:bookworm

RUN apt update && apt upgrade && apt install -y mariadb-server

COPY 50-server.cnf /etc/mysql/mariadb.conf.d/.
COPY init.sql /etc/mysql/init.sql
COPY db_script.sh .

RUN mkdir /run/mysql && chmod +x db_script.sh

CMD ["/db_script.sh"]
