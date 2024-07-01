FROM debian:bookworm

RUN apt update
RUN apt install -y mariadb-server

COPY conf/50-server.cnf /etc/mysql/mariadb.conf.d/.
COPY tools/init.sql /etc/mysql/init.sql
COPY tools/db_script.sh .

RUN mkdir /run/mysql && chmod +x db_script.sh

# Install tini
RUN apt-get update && apt install -y tini

# Use tini as the entrypoint
ENTRYPOINT ["/usr/bin/tini", "--"]

CMD ["/db_script.sh"]
