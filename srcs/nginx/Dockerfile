FROM alpine:latest

#install nginx and others
RUN apk update && apk upgrade
RUN apk add nginx openssl openrc openssh supervisor bash
RUN mkdir -p run/nginx && touch run/nginx/nginx.pid && \
    echo "root:root" | chpasswd


#copy nginx & supervisor configurations and script

COPY default /etc/nginx/conf.d/default.conf
COPY nginx_run.sh /var/
COPY supervisord.conf /etc/supervisord.conf
COPY index.html /var/www/index.html

#supervisor
RUN chmod +rw /etc/supervisord.conf &&  printf "rootroot\nrootroot\n" | adduser SLBogach

# generate ssl
RUN openssl req -x509 -nodes -days 90 \
            -newkey rsa:2048 \
            -subj "/C=RU/ST=Moscow/L=School21/OU=SLBogach/CN=ft_services" \
            -keyout /etc/ssl/certs/nginx.key -out /etc/ssl/certs/nginx.crt

COPY ssh_host_rsa_key.pub /etc/ssh/
COPY ssh_host_rsa_key /etc/ssh/
RUN chmod 400 /etc/ssh/ssh_host_rsa_key
COPY sshd_config /etc/ssh/

EXPOSE 80 443 22
CMD sh /var/nginx_run.sh