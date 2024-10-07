FROM dunglas/frankenphp

RUN install-php-extensions \
    pcntl \
    pdo \
    pdo_pgsql

COPY . /app

ENTRYPOINT ["php", "artisan", "octane:frankenphp"]

