FROM alpine

RUN apk update && apk upgrade && apk add mysql mysql-client openrc

#for saving data if container was killed
VOLUME [ "/var/lib/mysql" ]

COPY mysql_conf.sql /etc/
COPY my.cnf /etc/
COPY wordpress.sql /etc/
COPY mysql_run.sh .

RUN chmod u+x mysql_run.sh

EXPOSE 3306
ENTRYPOINT [ "sh", "mysql_run.sh" ]
