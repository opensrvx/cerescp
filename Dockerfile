FROM ubuntu:trusty
ENV DEBIAN_FRONTEND=noninteractive
RUN apt-get update -y && \
    apt-get upgrade -y
RUN apt-get install apache2 apache2-utils -y
RUN apt-get install php5 php5-mcrypt php5-mysql php5-gd libapache2-mod-php5 -y
COPY . /var/www/html/cp/
RUN chown -R www-data:www-data /var/www/html/cp/
EXPOSE 80
CMD ["apachectl","-DFOREGROUND"]
