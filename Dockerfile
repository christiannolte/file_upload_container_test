# Start from the official NGINX image
FROM php

# Copy your custom nginx.conf or default.conf into the container
COPY nginx.conf /etc/nginx/conf.d/default.conf

# Copy your index.html into the default NGINX html folder
COPY index.html /usr/share/nginx/html/index.php
# Copy your upload.php into the default NGINX html folder
COPY upload.php /usr/share/nginx/html/

# Expose port 80
EXPOSE 80

# By default, the base nginx image runs nginx, so no CMD needed.
