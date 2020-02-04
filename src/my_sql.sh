apt-get -qq -y update
wget https://dev.mysql.com/get/mysql-apt-config_0.8.14-1_all.deb
DEBIAN_FRONTEND=noninteractive echo "mysql-apt-config mysql-apt-config/select-server select mysql-5.7" | /usr/bin/debconf-set-selections
DEBIAN_FRONTEND=noninteractive dpkg -i mysql-apt-config_0.8.14-1_all.deb
rm mysql-apt-config_0.8.14-1_all.deb
apt-get -qq -y update
DEBIAN_FRONTEND=noninteractive apt-get install -qq -y mysql-server
chown -R mysql: /var/lib/mysql
service mysql start
mysql -u root -e "CREATE USER 'wpuser'@'localhost' IDENTIFIED BY 'wppassword';"
mysql -u root -e "CREATE DATABASE wordpress; use wordpress; source wordpress.sql;"
mysql -u root -e "GRANT ALL PRIVILEGES ON wordpress.* TO wpuser@localhost; FLUSH PRIVILEGES;"


wget wordpress.org/latest.tar.gz
tar -xvzf latest.tar.gz
chown -R www-data:www-data wordpress/
usermod -a -G www-data www-data
mv wordpress/* /var/www/html
