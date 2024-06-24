NAME = inception

all:
	cd $$PWD/src && docker compose up --build
	
down:
	cd $$PWD/src && docker compose down
	
clean: down
	docker system prune -a 
	sudo rm -rf ./src/web
	sudo rm -rf /home/rpodack/data
