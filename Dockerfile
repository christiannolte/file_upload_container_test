# Start from the official NGINX image
FROM nginx:alpine

# Copy your custom nginx.conf or default.conf into the container
COPY default.conf /etc/nginx/conf.d/default.conf

# Copy your index.html into the default NGINX html folder
COPY index.html /usr/share/nginx/html/

# Expose port 80
EXPOSE 80

# By default, the base nginx image runs nginx, so no CMD needed.
