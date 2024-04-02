# PHP | MariaDB | Nginx | Docker

<div style="display:flex; align-items: center; justify-content: space-between; max-width: 500px;">
	<img width="30" src="https://user-images.githubusercontent.com/25181517/183570228-6a040b9f-3ddf-47a2-a201-743121dac664.png" alt="php" title="php"/>
	<img width="30" src="https://github.com/marwin1991/profile-technology-icons/assets/136815194/3c698a4f-84e4-4849-a900-476b14311634" alt="MariaDB" title="MariaDB"/>
	<img width="30" src="https://user-images.githubusercontent.com/25181517/183345125-9a7cd2e6-6ad6-436f-8490-44c903bef84c.png" alt="Nginx" title="Nginx"/></code>
	<img width="30" src="https://user-images.githubusercontent.com/25181517/117207330-263ba280-adf4-11eb-9b97-0ac5b40bc3be.png" alt="Docker" title="Docker"/>
</div>

<br/>

This is a simple php monolithic environment ready to develop using mysql like in the old days 💀

⚠️ This is not ready for production, just for fun. Environment variables like database password, host and others are hardcoded.

<hr>

## How to run

Clone this repository
`git clone git@github.com:brunoandradebr/php-docker.git .`

Start docker services
`docker compose -f .docker/docker-compose.yml up -d`

Navigate to
`http://localhost`

That's it!

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

database and tables are generated based on files inside **.database** folder. Sql files are executed in alphabetical order.
