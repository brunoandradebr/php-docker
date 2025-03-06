# PHP | MariaDB | Nginx | Docker

<div style="display:flex; align-items: center; justify-content: space-between; max-width: 500px;">
	<img width="30" src="https://user-images.githubusercontent.com/25181517/183570228-6a040b9f-3ddf-47a2-a201-743121dac664.png" alt="php" title="php"/>
	<img width="30" src="https://github.com/marwin1991/profile-technology-icons/assets/136815194/3c698a4f-84e4-4849-a900-476b14311634" alt="MariaDB" title="MariaDB"/>
	<img width="30" src="https://user-images.githubusercontent.com/25181517/183345125-9a7cd2e6-6ad6-436f-8490-44c903bef84c.png" alt="Nginx" title="Nginx"/></code>
	<img width="30" src="https://user-images.githubusercontent.com/25181517/117207330-263ba280-adf4-11eb-9b97-0ac5b40bc3be.png" alt="Docker" title="Docker"/>
</div>

<br/>

This is a simple php monolithic environment ready to develop using mariadb like in the old days 💀

⚠️ This is not ready for production, just for fun ⚠️

<hr>

## How to run

##### 1 - Clone this repository

```bash
git clone git@github.com:brunoandradebr/php-docker.git .
```

##### 2 - Create a .env file

- 📂.database/
- 📂.docker/
- 📂 src/
- 📄.env

```bash
DB_USER=admin; # don't use root name. will conflict with default root user
DB_PASS=admin; # defines user and root password as same
DB_NAME=app;
```

##### 3 - Start docker services

```bash
# script for docker compose up
sh dev.sh
```

##### 4 - Run migrations to create tables

```bash
sh .database/migrate.sh
```

##### 5 - Run seeds to populate tables

```bash
sh .database/seed.sh
```

##### 6 - Open browser

```bash
http://localhost
```

## That's it!

<hr>

## Images

- **php:fpm** - (FastCGI Process Manager) Process php files
- **nginx:1.25-alpine** - Web Server
- **mariadb:latest** - Database

<hr>

## Services

- **php-fpm**
- **web**
- **database**

<hr>

## Extensions

- **mysqli**
- **pdo**
- **pdo_mysql**

<hr>

## Database

Tables are generated based on files inside **.database** folder.

📂 **.database/migrations**

```bash
  # For table creation. All sql files will be executed in alphabetical order.
  1-create-table-contacts.sql
  2-create-table-posts.sql
```

📂 **.database/seeds**

```bash
  # For table population. All sql files will be executed in alphabetical order.
  1-populate-table-contacts.sql
  2-populate-table-posts.sql
```
