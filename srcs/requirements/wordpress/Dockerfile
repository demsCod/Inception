# Utiliser debian:bullseye comme image de base
FROM debian:bullseye

# Mettre à jour et installer les paquets nécessaires
RUN apt-get update && apt-get upgrade -y \
&& apt-get install -y curl php php7.4-fpm php-mysql mariadb-client wget vim zsh git netcat mycli \
&& curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
&& chmod +x wp-cli.phar \
&& mv wp-cli.phar /usr/local/bin/wp \
&& mkdir -p /run/php \
&& mkdir -p /var/www/html/wordpress \
&& chown -R www-data:www-data /var/www/html/wordpress \
&& chmod -R 755 /var/www/html/wordpress

# Si vous avez déjà copié les fichiers de WordPress dans ce répertoire, cela garantit que 'wordpress' a accès à ce dossier
#COPY --chown=wordpress:wordpress /path/to/your/wordpress/files /var/www/html/

# Copier votre script wordpress.sh dans le conteneur
COPY /tools/wordpress.sh /

COPY ./conf/www.conf /etc/php/7.3/fpm/pool.d/www.conf
# Donner les permissions d'exécution au script
RUN chmod +x wordpress.sh

# Commande par défaut à exécuter dans le conteneur
CMD ["./wordpress.sh"]
