
FROM wordpress:latest
RUN apt-get update && apt-get install -y default-mysql-client
COPY ./themes/custom-theme /var/www/html/wp-content/themes/custom-theme
