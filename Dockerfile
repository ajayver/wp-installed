FROM wordpress:apache

# Act as root user
USER root

# persistent dependencies
RUN set -eux; \
	apt-get update; \
	apt-get install -y --no-install-recommends \
		git \
		dos2unix \
		wait-for-it \
        nodejs \
	; \
	rm -rf /var/lib/apt/lists/*

COPY wp-config.php /var/www/html/wp-config.php

# Copy the entrypoint script that will install WordPress
COPY entrypoint.sh /entrypoint.sh
# Make the entrypoint executable
RUN chmod +x /entrypoint.sh

# Convert Windows line breaks to Unix
RUN dos2unix /entrypoint.sh	

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install WP-CLI
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar; \
    php wp-cli.phar --info; \
    chmod +x wp-cli.phar; \
    mv wp-cli.phar /usr/local/bin/wp

# Switch to web root folder
WORKDIR /var/www/html

# Copy the wp files from the docker image to the web root
RUN cp -R /usr/src/wordpress/* .

# For some reason, the line above doesn't copy any files that start with dots,
# So we have to copy the .htaccess files explicitly
RUN cp /usr/src/wordpress/.htaccess .

# Make apache own all the files in the web root
RUN chown -R www-data:www-data /var/www/html

# Switch to apache user
USER www-data

# Run the entrypoint script on every docker startup
ENTRYPOINT ["/entrypoint.sh"]

# This is needed to keep the container running in the background
CMD ["apache2-foreground"]