# inception

Notes

    Ensure Docker and Docker Compose are installed on your VM.
    Secure credentials and sensitive data using Docker secrets and environment variables.

This project sets up a Docker-based environment with NGINX, WordPress (with php-fpm), and MariaDB, designed to run on a Virtual Machine using Docker Compose.

Features

    NGINX: Serves as the reverse proxy with TLSv1.2 or TLSv1.3.
    WordPress: Runs PHP-FPM without NGINX.
    MariaDB: Provides the database for WordPress.
    Volumes: Persistent storage for WordPress files and database.
    Network: Docker network for inter-service communication.

Directory Structure

plaintext

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

Setup

    Clone the Repository:

    sh

    git clone git@github.com:Robin-Lenz/Inception.git Inception
    cd Inception

Build and Run Containers:

sh

    make

Configuration

    Environment Variables: Set in .env.
    Secrets: Managed in the secrets/ directory.
    Domain Name: Set in .env as DOMAIN_NAME.

Access

    NGINX: Access via https://login.42.fr (replace login with your 42 login).
    WordPress: Available through NGINX.
    MariaDB: Accessible internally.

Notes

    Ensure Docker and Docker Compose are installed on your VM.
    Secure credentials and sensitive data using Docker secrets and environment variables.
