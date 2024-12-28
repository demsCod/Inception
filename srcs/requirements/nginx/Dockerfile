FROM debian:11

RUN apt update -y && apt upgrade -y \
&& apt install -y nginx &&  apt install -y openssl

RUN apt install vim -y

RUN mkdir -p /etc/nginx/ssl && openssl req -x509 -nodes -out\
 /etc/nginx/ssl/inception.crt -keyout /etc/nginx/ssl/inception.key \
-subj "/C=FR/ST=IDF/L=Paris/O=42/OU=42/CN=login.42.fr/UID=login"

RUN mkdir -p /var/run/nginx

# Create the WordPress directory first
RUN mkdir -p /var/www/html/wordpress

# Then set permissions
RUN chmod 755 /var/www/html/wordpress && \
    chown -R www-data:www-data /var/www/html/wordpress

COPY conf/nginx.conf /etc/nginx/nginx.conf

CMD [ "nginx", "-g", "daemon off;" ]