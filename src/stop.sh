# Change directory to where docker-compose.yml is located
cd $PWD/src

# Stop services in a specific order
docker compose stop mariadb
docker compose stop wordpress
docker compose stop nginx

