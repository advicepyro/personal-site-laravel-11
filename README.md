# personal-site-laravel-11
The Laravel project housing the source for my personal site. Currently deployed [here](https://www.deniswong.ca).
This project was a migration of my previous [Laravel project](https://github.com/advicepyro/personal-site), with:
- Laravel upgraded from 5.x to 11.x
- Vite removed, Laravel Mix restored to preserve past compatibility
- Node dependencies updated, but Bootstrap must be kept back to 4.x

Requires PHP 8.x, and any dependencies of Laravel listed [here](https://laravel.com/docs/master#installation). 

## Installation

Prior to running either run option below, first make a copy of `laravel-app/.env.example` to `laravel-app/.env`.

### For production
- Bring up the application with `docker compose up -d --build`
- Enter container's shell with `docker compose exec site sh`
- You should be in `/var/www/html`. Use `php artisan key:generate` if required

### Test locally with Sail
- (to be determined)
