FROM php:8.2-fpm

WORKDIR /var/www

RUN apt-get update && apt-get install -y --no-install-recommends libpq-dev libicu-dev systemd supervisor cron

RUN docker-php-ext-install intl
RUN docker-php-ext-install pdo_pgsql

RUN mkdir -p /var/log/supervisor.log

RUN apt-get clean
RUN rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*
RUN apt-get autoremove

# Consume domain events
RUN echo "*/1 * * * * root /usr/local/bin/php /var/www/bin/console messenger:consume >> /var/log/cron.log" >> /etc/cron.d/cronjobs

RUN chmod +x /etc/cron.d/cronjobs
RUN touch /var/log/cron.log

COPY config/supervisor.conf /etc/supervisor/conf.d/supervisor.conf

ENTRYPOINT ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisor.conf"]
