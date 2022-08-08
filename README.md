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

- [ ] Installed libraries
    - [ ] Laravel Excel - https://github.com/SpartnerNL/Laravel-Excel
- [X] Configure project structure
    - [ ] Http
        - [ ] Controllers
        - [ ] Requests
        - [ ] Resources
    - [ ] Imports
    - [ ] Models
    - [ ] Services
      - [ ] JsonResponse
    - [X] Database
      - [X] Factories
      - [X] Migrations
      - [X] Seeders
- [ ] Features
    - [ ] The application must have an endpoint to get the information of a ZIP Code
    - [ ] The response time must be less than 300ms 
    - [X] Send an email with the stock quote to the user who requested the quote
- [ ] Bonus Features
    - [ ] 
