#!/usr/bin/env bash

apt-get update -y && apt-get upgrade -y
apt-get install software-properties-common -y
add-apt-repository ppa:ondrej/php -y
apt-get update -y
apt-get install php7.3 -y

