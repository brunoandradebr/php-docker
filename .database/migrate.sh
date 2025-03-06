if [ ! -d "$PWD/.database" ]; then
  echo "\n\n\e[0;33mPlease run the shell script from project root folder.\n\n\e[0;30msh .database/migrate.sh\e[0;0m\n\n"
  exit
fi

env=./.env

. $env

basedir="$PWD/.database"

output="$basedir/migrate.sql"

migrations="$basedir/migrations/*.sql"

for migration in $migrations; do
    cat ${migration} >> $output;
    echo "\n" >> $output;
done

docker compose --env-file $env -f ./.docker/docker-compose.yml exec database bin/bash -c "mariadb --user=$DB_USER --password=$DB_PASS --execute='use $DB_NAME; source /app/config/migrate.sql; show tables;'"

rm -fr $output

echo "\n\n\e[0;33mDone!\e[0;0m\n\n"