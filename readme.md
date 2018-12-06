## For install

copy repository

copy files to local web server

create db terminals

create .env file in root directory and write 
<br>
APP_NAME=Terminals<br>
APP_ENV=local<br>
APP_KEY=base64:3L9dXRhoq9vYOyFUcPYoTanTTVg5WbkRVXZcAM2u1Pk=<br>
APP_DEBUG=true<br>
APP_LOG_LEVEL=debug<br>
APP_URL=http://localhost<br>
<br>
DB_CONNECTION=mysql<br>
DB_HOST=127.0.0.1<br>
DB_PORT=3306<br>
DB_DATABASE=terminals<br>
DB_USERNAME=root<br>
DB_PASSWORD=<br>
<br>
BROADCAST_DRIVER=log<br>
CACHE_DRIVER=file<br>
SESSION_DRIVER=file<br>
QUEUE_DRIVER=sync<br>
<br>
REDIS_HOST=127.0.0.1<br>
REDIS_PASSWORD=null<br>
REDIS_PORT=6379<br>
<br>
MAIL_DRIVER=smtp<br>
MAIL_HOST=smtp.mailtrap.io<br>
MAIL_PORT=2525<br>
MAIL_USERNAME=null<br>
MAIL_PASSWORD=null<br>
MAIL_ENCRYPTION=null<br>
<br>
PUSHER_APP_ID=<br>
PUSHER_APP_KEY=<br>
PUSHER_APP_SECRET=<br>
<br>
set in this files your db password and db name

start console , enter php artisan migrate

enter url http://localhost.site/
