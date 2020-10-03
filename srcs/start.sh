service mysql start
service php7.3-fpm start
service nginx start

echo "creating database"
mysql -e "CREATE DATABASE cjani_db;"
mysql -e "CREATE USER 'admin'@'localhost' IDENTIFIED BY 'admin';"
mysql -e "GRANT ALL ON *.* TO 'admin'@'localhost';"
mysql -e "FLUSH PRIVILEGES;"

bash