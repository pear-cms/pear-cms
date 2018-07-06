![picture](public/images/logo/logo_64.png)

## Pear-CMS
How to install

## Before you attempt to use this
Please, insert the SQL files from within /sql into your databases or Pear CMS will malfunction.

##1. Install composer

##2. Type the following command in CMD, should be in the main directory of Pear CMS:
```sh
$ php artisan key:generate
```

##3. Rename your '.env.example' to '.env' and edit it to your needs!

##4. You should populate the SQL database (with files from /sql directory)

##5. Add this to your 'httpd-vhosts.conf' located in 'apache/conf/extra/'

```sh
$ <VirtualHost *:80>
$ 	DocumentRoot "YOUR APACHE WWW DIRECTORY/Pear CMS Directory/public"
$ 	ServerAdmin *** YOUR EMAIL ***
$ </VirtualHost>
```