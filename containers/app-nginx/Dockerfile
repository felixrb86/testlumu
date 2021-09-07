FROM nginx:alpine
COPY ./conf.d /etc/nginx/conf.d/
WORKDIR /etc/nginx/conf.d
RUN rm -Rf /usr/share/nginx/html/ *
EXPOSE 80