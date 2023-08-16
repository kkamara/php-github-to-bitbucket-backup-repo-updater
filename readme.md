<img src="https://github.com/kkamara/useful/raw/main/MainClass.png" alt="MainClass.png" width=""/>

# PhP Docker Skeleton

(2020) Get started with php and docker.

## Installation

* [PHP and MySQL](https://www.apachefriends.org/download.html)
* [Composer](https://getcomposer.org/)

If you're using Docker make sure you have [Docker](https://docs.docker.com/get-docker/) and [Docker Compose](https://docs.docker.com/compose/install/) installed.

```bash
# composer install
composer i
```

## Usage

```bash
php src/MainClass.php -f="foo" --bar="baz"
```

## Using Linux with Docker?

```bash
make start # build & run your script
make stop  # stop your docker container
```

## Using Windows with Docker?

```bash
.\ps\run.ps1 start # build & run your script
.\ps\run.ps1 stop  # stop your docker container
```

## Want to use Python instead? 
[Python Docker Skeleton](https://github.com/kkamara/python-docker-skeleton)

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[BSD](https://opensource.org/licenses/BSD-3-Clause)
