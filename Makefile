NAME = inception

all:
	cd /home/robin/Inception-main/src && docker compose up --build
	
stop:
	cd /home/robin/Inception-main/src && docker compose down
	
clean:
	sudo rm -rf ./src/web
