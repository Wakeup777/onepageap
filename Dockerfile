FROM ubuntu:latest


RUN ln -sf /usr/share/zoneinfo/Europe/Moscow /etc/localtime && apt update && apt install -y apache2 php && apt clean && rm /var/www/html/index.html

COPY ./index.php /var/www/html/index.php

CMD ["/usr/sbin/apachectl","-D","FOREGROUND"]

EXPOSE 80

