# inception

# https://medium.com/@ssterdev/inception-guide-42-project-part-i-7e3af15eb671

# general useful commands
// show all images
sudo docker images

// build command for single docker ; -t <Name> tags the image with the name
sudo docker build -f Dockerfile -t <Name> .
#why is -f necessary here when Dockerfile is called Dockerfile ?

// run single image
sudo docker run --rm <Name>

# inception

# https://medium.com/@ssterdev/inception-guide-42-project-part-i-7e3af15eb671

# general useful commands
// show all images
sudo docker images

// build command for single docker ; -t <Name> tags the image with the name
sudo docker build -f Dockerfile -t <Name> .
#why is -f necessary here when Dockerfile is called Dockerfile ?

// run single image
sudo docker run --rm <Name>

//build and run docker compose
sudo docker compose up --build


#access commandline of container
docker exec -it <container_id_or_name> /bin/sh

#delete all images
docker rmi $(docker images -q)

#delete all volumes
docker volume rm $(docker volume ls -q)

#delet all etworks
docker network rm $(docker network ls -q)

#check what's running including ports
docker compose ps



