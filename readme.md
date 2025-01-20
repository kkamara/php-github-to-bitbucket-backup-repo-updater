<img src="https://github.com/kkamara/useful/raw/main/MainClass.png" alt="MainClass.png" width=""/>

# php-github-to-bitbucket-backup-repo-updater

:computer: (29-Aug-2023) Compatible with Windows, MacOS & Linux.

## Quickstart

```bash
git clone https://github.com/kkamara/php-github-to-bitbucket-backup-repo-updater
cd php-github-to-bitbucket-backup-repo-updater
# Update config.json in your php-github-to-bitbucket-backup-repo-updater directory.
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
git clone https://github.com/kkamara/php-github-to-bitbucket-backup-repo-updater
cd php-github-to-bitbucket-backup-repo-updater
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

[See Github to Bitbucket Backup Repo Updater](https://github.com/kkamara/nodejs-github-to-bitbucket-backup-repo-updater) made with NodeJS.

[See PHP ReactJS Boilerplate](https://github.com/kkamara/php-reactjs-boilerplate).

[See ReactJS Boilerplate](https://github.com/kkamara/reactjs-boilerplate).

[See PHP Scraper](https://github.com/kkamara/php-scraper).

[See NodeJS ReactJS Boilerplate](https://github.com/kkamara/nodejs-reactjs-boilerplate).

[PHP Docker Skeleton](https://github.com/kkamara/php-docker-skeleton).

[Python Docker Skeleton](https://github.com/kkamara/python-docker-skeleton).

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[BSD](https://opensource.org/licenses/BSD-3-Clause)
