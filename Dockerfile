FROM node:22-alpine AS node
FROM trafex/php-nginx:3.6.0 AS php-nginx

USER root

# Init script
COPY --chmod=777 init.sh /usr/local/bin/init.sh

# PDO is needed by Laravel. In addition, we need shadow for usermod later on,
# plus nano since I suck at text editors
RUN apk add --no-cache php83-pdo php83-pdo_sqlite shadow nano

# Install composer and node
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY --from=node /usr/local/lib/node_modules /usr/local/lib/node_modules
COPY --from=node /usr/local/bin/node /usr/local/bin/node
RUN ln -s /usr/local/lib/node_modules/npm/bin/npm-cli.js /usr/local/bin/npm
RUN ln -s /usr/local/lib/node_modules/npm/bin/npx-cli.js /usr/local/bin/npx

# Create a home directory for nobody - by default it is / which breaks
# anything that expects a writable home directory, especially npm
RUN mkdir /home/nobody
RUN chown nobody:nobody /home/nobody
RUN usermod -d /home/nobody nobody

# Back to non-priv user for the rest...
USER nobody
COPY --chown=nobody:nobody --chmod=644 container-configs/conf.d /etc/nginx/conf.d
