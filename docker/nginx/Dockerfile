FROM nginx:1.17.8-alpine

# Copy the public directory
COPY ./public/public /app/public/public

# Copy the nginx config file
COPY ./docker/nginx/nginx.conf /etc/nginx/conf.d/default.conf
