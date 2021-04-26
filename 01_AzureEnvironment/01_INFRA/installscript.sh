#!/bin/sh
# This configurates the linuy typo3 worker node

sudo apt-get install software-properties-common
sudo add-apt-repository ppa:ondrej/php
sudo apt update
sudo apt update
sudo apt install nginx
sudo systemctl stop nginx.service
sudo systemctl start nginx.service
sudo systemctl enable nginx.service

sudo apt-get install php7.4-fpm php7.4-cli php7.4-mysql php7.4-gd php7.4-imagick php7.4-tidy php7.4-xmlrpc

sudo apt-get install php7.4-xml
sudo apt-get install php7.4-zip
sudo apt-get install php7.4-intl

cd /home/adminlocal

git clone https://github.com/henrikmotzkus/typo3.git

sudo cp /etc/php/7.4/fpm/php.ini /etc/php/7.4/fpm/php.inibackup
sudo cp ./typo3/01_AzureEnvironment/01_INFRA/php.ini /etc/php/7.4/fpm/

sudo systemctl restart nginx.service
sudo systemctl restart php7.4-fpm

sudo cp ./typo3/01_AzureEnvironment/01_INFRA/default /etc/nginx/sites-enabled/

sudo nginx -t

chmod -R a+rwx typo3/

# Developer machine only 
# curl -sL https://aka.ms/InstallAzureCLIDeb | sudo bash