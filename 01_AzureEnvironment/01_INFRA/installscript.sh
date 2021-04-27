#!/bin/sh
# This configurates the linuy typo3 worker node

sudo apt update
sudo apt-get install software-properties-common -y
sudo add-apt-repository ppa:ondrej/php -y
sudo apt update

sudo apt-get install nginx -y
sudo systemctl stop nginx.service
sudo systemctl start nginx.service
sudo systemctl enable nginx.service

sudo apt-get install php7.4-fpm php7.4-cli php7.4-mysql php7.4-gd php7.4-imagick php7.4-tidy php7.4-xmlrpc -y

sudo apt-get install php7.4-xml -y
sudo apt-get install php7.4-zip -y
sudo apt-get install php7.4-intl -y

cd /home/adminlocal

git clone https://github.com/henrikmotzkus/typo3.git

chmod -R a+rwx typo3/


sudo cp /etc/php/7.4/fpm/php.ini /etc/php/7.4/fpm/php.inibackup
sudo cp ./typo3/01_AzureEnvironment/01_INFRA/php.ini /etc/php/7.4/fpm/
sudo cp ./typo3/01_AzureEnvironment/01_INFRA/default /etc/nginx/sites-enabled/

sudo nginx -t

sudo systemctl restart nginx.service
sudo systemctl restart php7.4-fpm



# Developer machine only 
# curl -sL https://aka.ms/InstallAzureCLIDeb | sudo bash