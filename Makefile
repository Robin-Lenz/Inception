NAME = inception

all:
	cd $$PWD/src && docker compose up --build
	
down:
	cd $$PWD/src && docker compose down
	
clean: down
	docker system prune -a -y
	#sudo rm -rf ./src/web
