FROM nginx:alpine
COPY ./conf.d /etc/nginx/conf.d/
WORKDIR /etc/nginx/conf.d
RUN rm /usr/share/nginx/html/ *
EXPOSE 80