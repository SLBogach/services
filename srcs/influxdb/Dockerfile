FROM alpine

RUN apk add influxdb supervisor && \
	apk add telegraf --repository http://dl-3.alpinelinux.org/alpine/edge/testing/ --allow-untrusted --no-cache && \
	mkdir -p /etc/telegraf

VOLUME /var/lib/influxdb

COPY start.sh /var/
COPY supervisord.conf /etc/
COPY telegraf.conf /etc/telegraf/

EXPOSE 8086

CMD sh /var/start.sh
