# Start from the official NGINX image
FROM erseco/alpine-php-webserver

# Copy your custom nginx.conf or default.conf into the container
#COPY nginx.conf /etc/nginx/conf.d/default.conf

# Copy your index.html into the default NGINX html folder
#COPY index.html /usr/share/nginx/html/
COPY index.html /var/www/html/
# Copy your upload.php into the default NGINX html folder
#COPY upload.php /usr/share/nginx/html/
COPY upload_stations.php /var/www/html/

RUN mkdir -p /var/www/html/uploads
RUN mkdir -p /var/www/html/uploads/stations
RUN chmod 777 /var/www/html/uploads/stations

RUN rm /var/www/html/index.php
# Expose port 80
EXPOSE 8080

# By default, the base nginx image runs nginx, so no CMD needed.
