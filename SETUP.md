## Requirements

Follow below steps for setups. Bellow instructions are given for mac os, you may use similar steps with different command for respective operating system

### Prerequisites

- Install php version 7.3 or above (brew install php)
- Install Mysql version 5.7 or above (brew install mysql)
- Install composer (brew install composer)
- brew services start

#### Set up project
- clone this project (git clone link)
- copy .env.example to .env file (cp .env .env.example)
- check database connectivity (give proper credentials to DB_DATABASE, DB_USERNAME, and DB_PASSWORD)
- run command `php artisan migrate`
- run command `php artisan serve`


- Now project set up done and navigate to this url (http://127.0.0.1:8000/create-url-hash)