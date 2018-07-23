![picture](public/themes/default/images/logo/logo_64.png)

# Pear-CMS
How to install

# Before you attempt to use this
Please, insert the SQL files from within /sql into your databases or Pear CMS will malfunction.

# 1. Install composer

# 2. Type the following command in CMD, should be in the main directory of Pear CMS:
```sh
php artisan key:generate
```

# 3. Rename your '.env.example' to '.env' and edit it to your needs!

# 4. You should populate the SQL database (with files from /sql directory)

# 5. Making the website public
## With apache:
```sh
<VirtualHost *:80>
 	DocumentRoot "YOUR APACHE WWW DIRECTORY/Pear CMS Directory/public"
 	ServerAdmin *** YOUR EMAIL ***
</VirtualHost>
```

Example:

```sh
<VirtualHost *:80>
 	DocumentRoot "C:/xampp/htdocs/pear/public"
 	ServerAdmin himikoemu@gmail.com
</VirtualHost>
```

## With nginx:
```
server {
  listen 80;
  listen [::]:80;

  server_name <domain name here>;
  set $base <folder of pear cms>;
  root $base/public;

  # index.php
  index index.php;

  # index.php fallback
  location / {
    try_files $uri $uri/ /index.php?$query_string;
  }

  # handle .php
  location ~ \.php$ {
    try_files $uri =404;

    # fastcgi
    fastcgi_pass                unix:/var/run/php/php7.2-fpm.sock;
    fastcgi_index                index.php;
    fastcgi_split_path_info        ^(.+\.php)(/.+)$;
    fastcgi_param                SCRIPT_FILENAME $document_root$fastcgi_script_name;
    fastcgi_param                PHP_ADMIN_VALUE open_basedir=$base/:/usr/lib/php/:/tmp/;
    fastcgi_intercept_errors    off;

    # default fastcgi_params
    include fastcgi_params;
  }

  # security headers
  add_header X-Frame-Options "SAMEORIGIN" always;
  add_header X-XSS-Protection "1; mode=block" always;
  add_header X-Content-Type-Options "nosniff" always;
  add_header Referrer-Policy "no-referrer-when-downgrade" always;
  add_header Content-Security-Policy "default-src * data: 'unsafe-eval' 'unsafe-inline'" always;
  add_header Strict-Transport-Security "max-age=31536000; includeSubDomains; preload" always;

  # . files
  location ~ /\. {
    deny all;
  }

  # assets, media
  location ~* \.(?:css(\.map)?|js(\.map)?|jpe?g|png|gif|ico|cur|heic|webp|tiff?|mp3|m4a|aac|ogg|midi?|wav|mp4|mov|webm|mpe?g|avi|ogv|flv|wmv)$ {
    expires 7d;
    access_log off;
  }

  # svg, fonts
  location ~* \.(?:svgz?|ttf|ttc|otf|eot|woff|woff2)$ {
    add_header Access-Control-Allow-Origin "*";
    expires 7d;
    access_log off;
  }

  # gzip
  gzip on;
  gzip_vary on;
  gzip_proxied any;
  gzip_comp_level 6;
  gzip_types text/plain text/css text/xml application/json application/javascript application/xml+rss application/atom+xml image/svg+xml;
}
```
