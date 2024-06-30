NAME = inception

all:
	cd $$PWD/src && docker compose up --build -d
	
down:
	cd $$PWD/src && docker compose -f docker-compose.yml --env-file .env down

stop:
	cd $$PWD/src && ./stop.sh
	
clean: down
	docker system prune -a --volumes
	#sudo rm -rf ./src/web
	#sudo rm -rf /home/rpodack/data
	
fclean:
	@docker stop $$(docker ps -qa)
	@docker system prune --all --force --volumes
	@docker network prune --force
	@docker volume prune --force
