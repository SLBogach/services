FROM alpine

RUN	apk update
RUN	apk add openrc openssl vsftpd
RUN apk add --no-cache --upgrade bash && rm -rf /var/cache/apk/*
RUN mkdir -p /var/ftp

COPY ./vsftpd.conf /etc/vsftpd/vsftpd.conf
COPY ftps_run.sh /ftps_run.sh

RUN chmod u+x /ftps_run.sh
RUN	mkdir -p /ftp_anon /SLBogach
RUN	printf "SLBogach\nSLBogach\n" | adduser SLBogach -s /bin/false -h /SLBogach
RUN	printf "/bin/false\n" >> /etc/shells
RUN	chown SLBogach:SLBogach /SLBogach
RUN openssl req -x509 -nodes -days 90 -newkey rsa:2048 -subj "/C=RU/ST=Moscow/L=School21/OU=SLBogach/CN=ft_services" -keyout /etc/vsftpd/vsftpd.key -out /etc/vsftpd/vsftpd.crt

EXPOSE 20 21 21000

ENTRYPOINT [ "sh", "ftps_run.sh" ]