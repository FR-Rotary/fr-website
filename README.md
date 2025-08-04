# FR-Rotary.com Website

This is an old, but nice service which details FR-Rotary information and should contain meeting minuets and stuff

## Setup for deployment

* Copy the file `db.ini-example.php` to `db.ini.php` and enter credentials the empty fields

* Create the corresponding user in the MySQL instance (only mariadb is tested) and create a database with the same name.

* Import the schemas from the provided SQL files in directory `database-init/schema`

* Start containers with `docker compose up -d`

### Note on routing

The current FR-server runs Traefik and as such some extra labels are appended to the compose file to instantiate a router with
the docker provider. Ensure this is set to the correct domains for a different server, or remove and replace with your own
reverse-proxy solution.

### Development deployment

To test this website, a development compose file is included. It contains a mariadb instance (no persistent data) and a phpMyAdmin instance
to efficiently edit the database contents. The root user has the password `test123`.

* Copy the file `db.ini-example.php` to `db.ini.php` and enter credentials the empty fields

* Start containers with `docker compose -f compose.dev.yml up -d`

* Create the corresponding user in the MySQL instance (only mariadb is tested) and create a database with the same name.

* Import the schemas from the provided SQL files in directory `database-init/schema`


## Note on uglyness (sorry)
I litteraly couldn't be bothered to setup a build system which reliably installs all dependecies from their respective sources, 
dealing with all of the inevitable breakage, when things change and stuff becomes sad. As such I've shamefully included the dependencies
source in this repo. Please don't hate me, though it's fair game to banter about it ;)
