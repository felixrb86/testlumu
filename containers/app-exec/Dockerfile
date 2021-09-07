FROM php:7.2-apache
COPY  ./app  /var/www/html/
WORKDIR /var/www/html/
RUN chown root:www-data * && \
chmod -R 774 * && \
chmod +x start.sh

CMD ["/var/www/html/start.sh"]