FROM php:7.3-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    mariadb-client \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    libzip-dev \
    jpegoptim optipng pngquant gifsicle \
    unzip \
    git \
    curl \
    nano \
    libpq-dev \
    cron \
    supervisor

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
RUN apt-get install -y libpq-dev
RUN docker-php-ext-install pdo_pgsql mbstring zip exif pcntl
RUN docker-php-ext-configure gd --with-gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ --with-png-dir=/usr/include/
RUN docker-php-ext-install gd

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Add user for laravel application
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Copy existing application directory contents
COPY . /var/www

# Copy existing application directory permissions
COPY --chown=www:www . /var/www

COPY ./start.sh /usr/local/bin/start
RUN chmod +x /usr/local/bin/start

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/supervisord.conf"]

# Cron config
COPY ./app.crontab /etc/cron.d/app.crontab
RUN chown www:www /etc/cron.d/app.crontab

RUN touch /var/log/cron.log
RUN chmod ugo+rwx /var/log/cron.log

RUN chmod gu+rw /var/run
RUN chmod gu+s /usr/sbin/cron

# Change current user to www
USER www

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["/usr/local/bin/start"]
