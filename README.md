### Error App\Models\User not found when Auth::attempt
Fix: `rm bootstrap/cache/config.php
`

### Install mongodb

sudo apt-get purge mongodb-org*
sudo apt-get install mongodb
sudo apt-get update
mongo --version

---- Connect to mongo
    mongodb://127.0.0.1:27017/test
---- Show list databse
    show dbs OR show databases