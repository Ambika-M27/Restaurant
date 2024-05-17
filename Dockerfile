 



# Use the official PHP image with Apache as base
FROM php:7.4-apache

# Set environment variables for PostgreSQL user and password
ENV POSTGRES_USER=restaurant
ENV POSTGRES_PASSWORD=postgres

# Install PostgreSQL client and server
RUN apt-get update && \
    apt-get install -y libpq-dev postgresql && \
    docker-php-ext-install pdo_pgsql

# Create a PostgreSQL user and set the password
RUN service postgresql start && \
    su - postgres -c "psql -c \"CREATE USER $POSTGRES_USER WITH PASSWORD '$POSTGRES_PASSWORD';\"" && \
    service postgresql stop

# Enable Apache modules
RUN a2enmod rewrite

# Copy all files from the current directory to the container's document root
COPY . /var/www/html/public

# Set working directory
WORKDIR /var/www/html/public

# Apache configuration
RUN sed -i 's/\/var\/www\/html/\/var\/www\/html\/public/g' /etc/apache2/sites-available/000-default.conf && \
    echo "<Directory /var/www/html/public>" >> /etc/apache2/sites-available/000-default.conf && \
    echo "    Options Indexes FollowSymLinks" >> /etc/apache2/sites-available/000-default.conf && \
    echo "    AllowOverride All" >> /etc/apache2/sites-available/000-default.conf && \
    echo "    Require all granted" >> /etc/apache2/sites-available/000-default.conf && \
    echo "</Directory>" >> /etc/apache2/sites-available/000-default.conf

# PHP configuration
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"
RUN sed -i 's/display_errors = Off/display_errors = On/' "$PHP_INI_DIR/php.ini"

# Expose ports
EXPOSE 80 8443

# Command to start Apache and PostgreSQL when the container starts
CMD service postgresql start && apache2-foreground
