
![Logo](https://avatars.mds.yandex.net/get-maps-adv-crm/3695124/2a0000018027d6b41794d71670333814a7ee/landing_logo_x3)


# EraVR Overdose API

API backend for EraVR Overdose PWA


## Installation

Composer Installation

```bash
  git clone https://github.com/HenLeiko/eravr-api
  cd eravr-api
  php composer install
```

Use migrations for creation tables

```bash
  php artisan migrate
```

Use seeder for creation test data

```bash
  php artisan db:seed
```

## API Reference

#### Get all games

```http
  GET /api/games
```

| Parameter | Type     | Description                |
|:----------|:---------|:---------------------------|
| `api_key` | `string` | **Required**. Your API key |

#### Get game

```http
  GET /api/game/{id}
```

| Parameter | Type  | Description                       |
|:----------|:------|:----------------------------------|
| `id`      | `int` | **Required**. Id of game to fetch |

#### Post game

```http
  POST /api/games
```

| Parameter     | Type     | Description                |
|:--------------|:---------|:---------------------------|
| `name`        | `string` | **Required**. Name of game |
| `description` | `string` | Description of game        |
 
#### Get all tags

```http
  GET /api/tags
```

| Parameter | Type     | Description                |
|:----------|:---------|:---------------------------|
| `api_key` | `string` | **Required**. Your API key |

#### Get tag

```http
  GET /api/tag/{id}
```

| Parameter | Type  | Description                      |
|:----------|:------|:---------------------------------|
| `id`      | `int` | **Required**. Id of tag to fetch |

```http
  POST /api/tag
```

| Parameter | Type     | Description               |
|:----------|:---------|:--------------------------|
| `name`    | `string` | **Required**. Name of tag |

#### User register

```http
  POST /api/register
```

| Parameter  | Type     | Description                   |
|:-----------|:---------|:------------------------------|
| `name`     | `string` | **Required**. Name of account |
| `email`    | `string` | Account email                 |
| `password` | `string` | Account password              |

#### User login

```http
  POST /api/login
```

| Parameter  | Type     | Description                   |
|:-----------|:---------|:------------------------------|
| `email`    | `string` | Account email                 |
| `password` | `string` | Account password              |

#### User logout

```http
  POST /api/logout
```

## License

[MIT](https://choosealicense.com/licenses/mit/)


## Authors

- [@HenLeiko](https://github.com/HenLeiko)


## Badges

[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)



## Roadmap

- Additional Caching

- Add endpoint for importing json data

- Add role integration
