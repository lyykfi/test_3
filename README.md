Для запуска проекта используется

 ./vendor/bin/sail up

Сначала нужно провести миграции

./vendor/bin/sail php artisan migrate:install
./vendor/bin/sail php artisan migrate

Потом добавить seeds

./vendor/bin/sail php artisan db:seed

Потом собираем фронт

npm i
npm run build

Для поиска сотрудников используется запрос
POST /employee/search

в который передается { text: ... } в формате через ,

По ссылке http://localhost/api/documentation поднят swagger с описанием