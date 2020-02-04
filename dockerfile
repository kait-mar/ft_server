FROM debian:buster
EXPOSE 80 443
RUN apt -y -qq update
RUN apt-get install -f -y -qq nginx wget lsb-release gnupg php7.3-fpm php7.3-mysql php7.3-mbstring
RUN apt-get -y -qq -f install nginx
RUN apt install -y php7.3
RUN wget https://files.phpmyadmin.net/phpMyAdmin/4.9.4/phpMyAdmin-4.9.4-all-languages.tar.gz
RUN tar -x -f phpMyAdmin-4.9.4-all-languages.tar.gz
RUN mv phpMyAdmin-4.9.4-all-languages /var/www/html/phpmyadmin
RUN chown -R www-data:www-data /var/www/html/phpmyadmin
COPY ./src/default /etc/nginx/sites-available
COPY ./src/wordpress.sql /
COPY ./src/my_sql.sh /
RUN bash my_sql.sh
COPY ./src/wp-config.php /var/www/html
COPY ./src/start.sh /
RUN apt update
COPY ./src/nginx-selfsigned.crt /etc/ssl/certs
COPY ./src/nginx-selfsigned.key /etc/ssl/private
COPY ./src/self-signed.conf /etc/nginx/snippets
COPY ./src/ssl-params.conf /etc/nginx/snippets
COPY ./src/dhparam.pem /etc/nginx
CMD bash start.sh