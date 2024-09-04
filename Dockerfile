FROM node:22-alpine AS node
FROM trafex/php-nginx:3.6.0 AS php-nginx

USER root

# Dependencies: composer, node, PDO needed
RUN apk add --no-cache php83-pdo php83-pdo_sqlite
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY --from=node /usr/local/lib/node_modules /usr/local/lib/node_modules
COPY --from=node /usr/local/bin/node /usr/local/bin/node
RUN ln -s /usr/local/lib/node_modules/npm/bin/npm-cli.js /usr/local/bin/npm
RUN ln -s /usr/local/lib/node_modules/npm/bin/npx-cli.js /usr/local/bin/npx

# This might be needed for things like psysh (tinker)
RUN mkdir /.config
RUN chown nobody:nobody /.config

# Back to non-priv user for the rest...

USER nobody

COPY --chown=nobody:nobody --chmod=644 container-configs/conf.d /etc/nginx/conf.d

# Compile site assets
COPY --chown=nobody:nobody laravel-app /var/www/html
WORKDIR /var/www/html
RUN chmod 644 /var/www/html
RUN composer install --no-dev
RUN npm install
RUN npx mix --production
RUN php artisan migrate
