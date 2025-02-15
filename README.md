# Simple PHP App with Nginx & MySQL on Docker

This project demonstrates a basic PHP application with Nginx and MySQL, all running in Docker containers.

## Getting Started

1. Clone: `git clone https://github.com/KeyframeEditor/hello-php-docker.git` and `cd hello-php-docker`
2. Run: `docker-compose up -d`
3. Access: `http://localhost:8080`

## Files

*   `docker-compose.yml`: Defines Nginx, PHP, MySQL services.
*   `index.php`: PHP application code (database connection & query).
*   `Dockerfile`: Builds PHP image with `mysqli` extension.
*   `schema.sql`: SQL script to create table and insert data.
*   `nginx/conf.d/app.conf`: Nginx configuration.