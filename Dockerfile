FROM php:latest
MAINTAINER Asaf Ohayon <asaf@sysbind.co.il>
ADD . /
RUN curl -s http://getcomposer.org/installer | php && ./composer.phar install
ENTRYPOINT /main.php
