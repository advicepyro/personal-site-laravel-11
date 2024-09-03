# personal-site-laravel-11
The Laravel project housing the source for my personal site. Currently deployed [here](https://www.deniswong.ca).
This project was a migration of my previous [Laravel project](https://github.com/advicepyro/personal-site), with:
- Laravel upgraded from 5.x to 11.x
- Vite removed, Laravel Mix restored to preserve past compatibility
- Node dependencies updated, but Bootstrap must be kept back to 4.x

Requires PHP 8.x, and any dependencies of Laravel listed [here](https://laravel.com/docs/master#installation). 

## Installation

- Install assets with `npm install`
- Invoke Laravel Mix with `npx mix --production`
- Then bring up the containers with `docker compose -f docker-compose-site.yml up -d --build`

## Docker Compose files

The default `docker-compose.yml` is for Laravel Sail. `docker-compose-site.yml` is to get the application up and running in production.
