#!/bin/sh

cd /home/nobody/site
composer install --no-dev
npm install
npx mix --production

/usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
