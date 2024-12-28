#!/bin/bash

sleep 5

curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar
mv wp-cli.phar /usr/local/bin/wp

cd /var/www/html/wordpress
chmod -R 755 /var/www/html/wordpress/
chown -R www-data:www-data /var/www/html/wordpress


echo "[========WP INSTALLATION STARTED========]"
echo "herrrre1"
find /var/www/html/wordpress/ -mindepth 1 -delete
wp core download --allow-root
wp core config --dbhost=mariadb:3306 --dbname="$SQL_DATABASE" --dbuser="$SQL_USER" --dbpass="$SQL_ROOT_PASSWORD" --allow-root
wp core install --url="$DOMAIN_NAME" --title="$TITLE" --admin_user="$WP_ADMIN_USER" --admin_password="$WP_ADMIN_PASSWORD" --admin_email="$WP_ADMIN_EMAIL" --allow-root
wp user create "$WP_USER" "$WP_USER_EMAIL" --user_pass="$WP_USER_PASSWORD" --allow-root
sleep 5

# Modify PHP-FPM configuration
sed -i 's/listen = \/run\/php\/php7.4-fpm.sock/listen = 9000/g' /etc/php/7.4/fpm/pool.d/www.conf
mkdir -p /run/php
# chown -R www-data:www-data /var/www/html/wordpress/wp-content/uploads
/usr/sbin/php-fpm7.4 -F -R
echo "herrrre8778"
#exec $@
