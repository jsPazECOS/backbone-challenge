## Backend Developer Challenge

### Installation

To run and use the project you have to follow these next steps

- Run ``` composer install ``` to install dependencies.
- Copy the ``.env.sample`` file into ``.env`` and modify its content to match your current settings.
- Run `` php artisan migrate`` and `` php artisan db:seed`` 
- Run ``php artisan serve``
- Go to http://127.0.0.1:8000/api/zip-codes/{ZIPCode}

### Endpoint API

#### Get ZIP Code info

- API: /api/zip-codes/{ZIPCode}
- Method: GET

### Features

- [X] Configure project structure
    - [X] Http
        - [X] Controllers
        - [X] Requests
        - [X] Resources
    - [X] Models
    - [X] Database
      - [X] Factories
      - [X] Migrations
      - [X] Seeders
- [X] Features
    - [X] The application must have an endpoint to get the information of a ZIP Code
    - [X] The response time must be less than 300ms 
