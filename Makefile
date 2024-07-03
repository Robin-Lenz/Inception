NAME = inception

all:
	cd $$PWD/srcs && docker compose up --build -d
	
down:
	#sleep 10
	cd $$PWD/srcs && docker compose down

re: fclean all
	
rmvolumes:
	#uncomment to delete persistance
	docker volume rm mariadb
	docker volume rm wordpress
	

clean: down
	docker system prune --force -a --volumes
	
fclean:
	sleep 10
	@docker stop $$(docker ps -qa)
	@docker system prune --all --force --volumes
	@docker network prune --force
	@docker volume prune --force
