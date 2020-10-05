# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: cjani <cjani@student.21-school.ru>         +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/08/24 23:58:53 by cjani             #+#    #+#              #
#    Updated: 2020/08/24 23:59:42 by cjani            ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

# INITIATING THE SYSTEM
FROM	debian:buster

# PREPARING SERVER
RUN		apt-get -y update && apt-get -y upgrade
RUN		apt-get install -y vim
RUN		apt-get install -y wget
RUN		apt-get install -y nginx
RUN		apt-get install -y mariadb-server
RUN		apt-get install -y mariadb-client
RUN		apt-get install -y php7.3
RUN		apt-get install -y php-fpm
RUN		apt-get install -y php-common 
RUN		apt-get install -y php-mbstring
RUN		apt-get install -y php-xmlrpc 
RUN		apt-get install -y php-soap
RUN		apt-get install -y php-gd 
RUN		apt-get install -y php-xml
RUN		apt-get install -y php-intl
RUN		apt-get install -y php-mysql
RUN		apt-get install -y php-cli
RUN		apt-get install -y php-ldap
RUN		apt-get install -y php-zip
RUN		apt-get install -y php-curl
RUN		apt-get install -y openssl
RUN		apt-get install -y curl

# GENERATING OPENSSL
RUN		openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
		-keyout /etc/ssl/private/secure.key -out /etc/ssl/certs/secure.crt \
		-subj "/C=RU/ST=MosReg/L=Mitishchi/O=MyHata/OU=cjani/CN=ft_sever/"

# WORDPRESS
RUN		wget https://wordpress.org/latest.tar.gz
RUN		tar -xzf latest.tar.gz -C /var/www/html/
RUN		rm -f latest.tar.gz
COPY	./srcs/wp-config.php /var/www/html/wordpress/

# PHPMYADMIN
RUN		wget https://files.phpmyadmin.net/phpMyAdmin/4.9.5/phpMyAdmin-4.9.5-all-languages.tar.gz
RUN		tar -xzf phpMyAdmin-4.9.5-all-languages.tar.gz -C /var/www/html/
RUN		rm -f phpMyAdmin-4.9.5-all-languages.tar.gz 
RUN		mv /var/www/html/phpMyAdmin-4.9.5-all-languages /var/www/html/phpmyadmin
RUN		mv /var/www/html/phpmyadmin/config.sample.inc.php /var/www/html/phpmyadmin/config.inc.php 

# COPIING NGINX CONFIG
COPY	./srcs/default /etc/nginx/sites-available/

# PERMITIONS
RUN		chown -R www-data:www-data /var/www/*
RUN		chmod 777 /var/*

# OTHER CONF
COPY	./srcs/index.html /var/www/html/
COPY	./srcs/autoindex.sh /var/www/html/
COPY	./srcs/start.sh /var/www/html/
EXPOSE	80 443
RUN		chmod +x /var/www/html/start.sh

# RUNNING SH IN THE CONTAINER
CMD		["bash", "/var/www/html/start.sh"]  