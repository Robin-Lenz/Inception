# inception

Notes

Add this line to your hosts file to access the URL rpodack.42.fr and ensure the service is working properly
    127.0.0.1    rpodack.42.fr

Ensure Docker and Docker Compose are installed on your VM.<br>
The Secrets folder was intentionally pushed to showcase this project with more convenience for the visitor.

This project sets up a Docker-based environment with NGINX, WordPress (with php-fpm), and MariaDB, designed to run on a Virtual Machine using Docker Compose.

# Features

NGINX: Serves as the reverse proxy with TLSv1.2 or TLSv1.3.<br>
WordPress: Runs PHP-FPM without NGINX.<br>
MariaDB: Provides the database for WordPress.<br>
Volumes: Persistent storage for WordPress files and database.<br>
Network: Docker network for inter-service communication.<br>

Directory Structure

    .
    ├── Makefile
    ├── secrets/
    │   ├── wp_user_password.txt
    │   ├── wp_user.txt
    │   ├── wp_admin_user.txt
    │   ├── wp_admin_password.txt
    │   ├── db_user.txt
    │   └── db_password.txt
    └── srcs/
        ├── .env
        ├── docker-compose.yml
        └── requirements/
            ├── mariadb/
            │   ├── Dockerfile
            │   └── .dockerignore
            ├── nginx/
            │   ├── Dockerfile
            │   └── .dockerignore
            └── wordpress/
                ├── Dockerfile
                └── .dockerignore





# Setup

Clone the Repository:

    git clone git@github.com:Robin-Lenz/Inception.git Inception
    cd Inception

Build and Run Containers:

    make

# Configuration

Environment Variables: Set in .env.<br>
Domain Name: Set in .env as DOMAIN_NAME.<br>
Secrets: Managed in the secrets/ directory.<br>

    Note: The secrets folder is included in this repository for demonstration
    purposes only. For security reasons, you should not include
    sensitive information in your public repository.
    Ensure you replace or manage sensitive data 
    appropriately in a production environment.

# Access

NGINX: Access via https://rpodack.42.fr
WordPress: Available through NGINX.
MariaDB: Accessible internally.
