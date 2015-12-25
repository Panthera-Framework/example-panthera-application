Panthera Framework 2 Application Skeleton
=========================================

Example application skeleton based on Panthera Framework 2, this project is a good template for creating new projects.

## Setup

Clone the repository at first.

```bash
git clone https://github.com/Panthera-Framework/example-panthera-application
```

Now, install dependencies (PF2 included):

```bash
cd example-panthera-application
php -r "readfile('https://getcomposer.org/installer');" | php
./composer.phar install

# temporary workaround for wrong version of PF2 on packagist
cd vendor/pantheraframework/panthera
git pull
cd ../../../
```

And finally deploy developer environment, which included building SQLite3 database, migrations, shell configuration:

```bash
vendor/pantheraframework/panthera/lib/Binaries/deploy Build/Environment/Developer
```

## How to proceed with builded application

There is an interactive shell where you can re-build routing, create template packages, controllers and more.

```bash
# entering PF2 shell
.content/Binaries/shell
```

In welcome screen you should see a list of available commands. The most important command is "deploy" which can
rebuild database, build cache, create backups, make packages and controllers, generate a version, release an application.

```bash
deploy -m # this will show you list of all available tasks from your application and built-in PF2
```

## Start application using bult-in web server

```bash
webserver --server PHP start
```

> [damian|Example Application|example-panthera-application]$ webserver --server PHP start
> ~> Deploying a web server configuration
> $ /srv/http/example-panthera-application/vendor/pantheraframework/panthera/lib/Binaries/deploy Build/Environment/Webserver/Php
> =======> Running task Build/Environment/Webserver/Php
>
> ++ Task finished in: 0.0004570484161377s
> ~> Running a web server startup command
> $ php -S localhost:8080 index.php

Now you could launch your favorite web browser to test the application:

```bash
curl http://localhost:8080/

# or
firefox http://localhost:8080/
chromium http://localhost:8080/
```
