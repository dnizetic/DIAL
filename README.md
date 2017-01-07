Cloning project

` git clone https://github.com/dnizetic/DIAL.git `

Pulling latest changes

`git pull origin master`

Setting up the project

1) Create database `dial`

2) Import sql from `sql/dial.sql`


Setting up virtual hosts file (`/etc/apache2/sites-available/005-dial.conf`)

```
<VirtualHost *:80>
    DocumentRoot "/var/www/DIAL"
    ServerName www.dial.com

<Directory "/var/www/DIAL">
    AllowOverride All
</Directory>

</VirtualHost>
```

Setting up hosts file

```
127.0.0.1 www.dial.com
```