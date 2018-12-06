## For install

copy repository

copy files to local web server

create db terminals

create .env file in root directory and write 

APP_NAME=Terminals
APP_ENV=local
APP_KEY=base64:3L9dXRhoq9vYOyFUcPYoTanTTVg5WbkRVXZcAM2u1Pk=
APP_DEBUG=true
APP_LOG_LEVEL=debug
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=terminals
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=

set in this files your db password and db name

start console , enter php artisan migrate

enter url http://localhost.site/
