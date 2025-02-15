# Simple PHP Hello World with Nginx on Docker

This project demonstrates a basic PHP "Hello, World!" webpage served by Nginx within a Docker container.

## Getting Started

1.  **Clone the repository:**

    ```bash
    git clone [https://github.com/KeyframeEditor/hello-php-docker.git](https://www.google.com/search?q=https://github.com/KeyframeEditor/hello-php-docker.git)
    cd hello-php-docker
    ```

2.  **Build and run the Docker containers:**

    ```bash
    docker-compose up -d
    ```

3.  **Access the webpage:**

    Open your web browser and navigate to `http://localhost:8080`. You should see the "Hello World" message.

## Files

*   `docker-compose.yml`: Defines the Nginx and PHP-FPM services.
*   `index.php`: The PHP "Hello World" file.
*   `app.conf`: Nginx configuration file.


## docker-compose.yml

```yaml
version: '3.8'

services:
  php:
    image: php:8.3-fpm
    volumes:
      - .:/var/www/html
    networks:
      - app-network
    restart: unless-stopped

  nginx:
    image: nginx:alpine
    ports:
      - "8080:80"
    volumes:
      - .:/var/www/html
      - ./nginx/conf.d:/etc/nginx/conf.d
    depends_on:
      - php
    networks:
      - app-network
    restart: unless-stopped

networks:
  app-network:
    driver: bridge