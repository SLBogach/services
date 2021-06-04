#!/bin/bash

#COLORS
BLUE='\033[36m'
WHITE='\033[0m'
RESET='\033[0m'
FONBLUE='\033[46m'

#STARTING PROJECT
echo -e "$BLUE ===================================== $RESET"
echo -e "$BLUE =========FT_SERVICES PROJECT========= $RESET"
echo -e "$BLUE ===================================== $RESET"

echo -e "$BLUE Starting minikube... $RESET"
minikube start --driver=virtualbox --memory='3000' --disk-size 5000MB

echo -e "$BLUE Enabling metallb... $RESET"
minikube addons list
minikube addons enable metallb
echo -e "$FONBLUE $WHITE minikube with metallb sucessfully installed $RESET"

echo -e "$BLUE Go to environment... $RESET"
eval $(minikube docker-env)
echo -e "$FONBLUE $WHITE OK $RESET"

echo -e "$BLUE Starting to build docker images...$RESET"
docker build -t service_phpmyadmin ./srcs/phpmyadmin
echo -e "$BLUE phpmyadmin sucessfully build $RESET"
docker build -t service_nginx ./srcs/nginx
echo -e "$BLUE nginx sucessfully build $RESET"
docker build -t service_wordpress ./srcs/wordpress
echo -e "$BLUE wp sucessfully build $RESET"
docker build -t service_mysql ./srcs/mysql
echo -e "$BLUE mysql sucessfully build $RESET"
docker build -t service_influxdb ./srcs/influxdb
echo -e "$BLUE influxdb sucessfully build $RESET"
docker build -t service_ftps ./srcs/ftps
echo -e "$BLUE grafana sucessfully build $RESET"
docker build -t service_grafana ./srcs/grafana

echo -e "$FONBLUE $WHITE all images sucessfully created $RESET"

echo -e "$BLUE Applying yaml settings... $RESET"
kubectl apply -f srcs/metallb.yaml
kubectl apply -f srcs/nginx.yaml
kubectl apply -f srcs/wordpress.yaml
kubectl apply -f srcs/mysql_pv.yaml
kubectl apply -f srcs/mysql.yaml
kubectl apply -f srcs/phpmyadmin.yaml
kubectl apply -f srcs/influxdb_pv.yaml
kubectl apply -f srcs/influxdb.yaml
kubectl apply -f srcs/ftps.yaml
kubectl apply -f srcs/grafana.yaml
kubectl apply -f srcs/telegraf.yaml

echo -e "$FONBLUE $WHITE Applying yaml settings sucessfully done $RESET"

echo -e "$BLUE Enabling dashboard... $RESET"
minikube dashboard