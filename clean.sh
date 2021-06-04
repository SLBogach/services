#!/bin/bash

kubectl delete pods --all
#docker rmi $(docker images -a -q)
minikube stop
minikube delete