Project is on symfony, 6.3
Requires docker and docker compose
### SETTING UP
* Run `make up`: it will download and run necessary containers
  * It needs port 80 to be free.
* Run `make shell`
* run `./bin/console doctrine:database:create` to create database
* run `./bin/console doctrine:migrations:migrate` to migrate schemas

### Usage
* To get in container run `make shell`
* Access on [football.docker.localhost](http://football.docker.localhost/).
