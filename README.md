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


# copy config files from inside the container to the directory
// copy configfile of wp-php to directory wordpress
sudo docker cp wp-php:/etc/php/8.2/fpm/pool.d/www.conf ./inception/requirements/wordpress/.

// copy configfile of nginx to directory nginx
sudo docker cp nginx:/etc/nginx/sites-available/default ./inception/requirements/nginx/.






