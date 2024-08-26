NAME = inception

all:
	cd $$PWD/srcs && docker compose up --build -d
	
down:
	cd $$PWD/srcs && docker compose down

re: fclean all
	
rmvolumes:
	docker volume rm mariadb
	docker volume rm wordpress
	

clean: down
	docker system prune --force -a --volumes
	
fclean: clean
	@docker system prune --all --force --volumes
	@docker network prune --force
	@docker volume prune --force
