FROM alpine

RUN apk update && apk upgrade
RUN apk add nginx \
            supervisor \
            php7 php7-fpm php7-opcache php7-json php7-iconv php7-mbstring php7-gettext \
		    php7-gd php7-mysqli php7-zlib php7-curl php7-session php7-phar \
		    wget
RUN mkdir -p /run/nginx /run/php 

RUN wget http://files.directadmin.com/services/all/phpMyAdmin/phpMyAdmin-5.0.2-all-languages.tar.gz && \
    tar zxvf phpMyAdmin-5.0.2-all-languages.tar.gz && \
    rm phpMyAdmin-5.0.2-all-languages.tar.gz && \
    mv phpMyAdmin-5.0.2-all-languages /var/www/phpmyadmin && \
    chmod -R 777 /var/www/

COPY nginx.conf         /etc/nginx/conf.d/default.conf
COPY supervisord.conf  /etc/supervisord.conf
COPY config.inc.php    /var/www/phpmyadmin/
COPY start.sh /tmp/start.sh

RUN chmod +x /tmp/start.sh && \
    chmod 755 /var/www/phpmyadmin/config.inc.php
    
EXPOSE 5000
CMD sh /tmp/start.sh