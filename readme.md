<img src="https://github.com/kkamara/useful/raw/main/MainClass.png" alt="MainClass.png" width=""/>

# github-to-bitbucket-backup-repo-updater

:computer: (29-Aug-2023) Compatible with Windows, MacOS & Linux.

## Quickstart

```bash
# Set a config.json in your current working directory at your terminal.
composer require kkamara/ghbbupdater
composer i
composer start
```

## Installation

* [PHP and MySQL](https://www.apachefriends.org/download.html)
* [Composer](https://getcomposer.org/)

If you're using Docker make sure you have [Docker](https://docs.docker.com/get-docker/) and [Docker Compose](https://docs.docker.com/compose/install/) installed.

Update `config.json` with your github and bitbucket remote urls for your repos.

```json
{
  "repos": {
    "kelvinkamara.com": {
      "github": {
        "origin": "https://github.com/kkamara/kelvinkamara.com",
        "branch": "develop"
      },
      "bitbucket": {
        "origin": "git@bitbucket.org:kkamara2/kelvinkamara.com",
        "branch": "develop"
      }
    }
  }
}
```

```bash
composer require kkamara/ghbbupdater
# composer install
composer i
```

## Usage

```bash
# php src/MainClass.php
composer start
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

## Misc

[old Github to bitbucket backup repo updater.](https://github.com/kkamara/github-to-bitbucket-backup-repo-updater)

[PHP Docker Skeleton](https://github.com/kkamara/php-docker-skeleton)

[Python Docker Skeleton](https://github.com/kkamara/python-docker-skeleton)

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[BSD](https://opensource.org/licenses/BSD-3-Clause)
