FROM debian:bookworm

ENV DEBIAN_FRONTEND=noninteractive
RUN apt update
#RUN apt upgrade 
RUN apt install -y mariadb-server

COPY 50-server.cnf /etc/mysql/mariadb.conf.d/.
COPY init.sql /etc/mysql/init.sql
COPY db_script.sh .

RUN mkdir /run/mysql && chmod +x db_script.sh

CMD ["/db_script.sh"]
