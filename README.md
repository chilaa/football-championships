Project is on symfony, 6.3
Requires php 8.1
### SETTING UP
* Set up database credentials in .env
* Import `dump.sql` or run commands:
  * `php bin/console doctrine:database:create`
  * `php bin/console doctrine:migrations:migrate`

### Running project
* run dev server using Symfony console command: `symfony server:start`
* Or run php dev server from `public` directory: `php -S localhost:8888`
