#!/bin/sh
# This configurates the linux typo3 dev machine

sudo apt-get install software-properties-common -y
sudo add-apt-repository ppa:ondrej/php -y
sudo apt update

sudo apt-get install nginx -yy
sudo systemctl stop nginx.service
sudo systemctl start nginx.service
sudo systemctl enable nginx.service

sudo apt-get install php7.4-fpm php7.4-cli php7.4-mysql php7.4-gd php7.4-imagick php7.4-tidy php7.4-xmlrpc -y

sudo apt-get install php7.4-xml -y
sudo apt-get install php7.4-zip -y
sudo apt-get install php7.4-intl -y

sudo cp /etc/php/7.4/fpm/php.ini /etc/php/7.4/fpm/php.inibackup
sudo cp php.ini /etc/php/7.4/fpm/


sudo systemctl restart nginx.service
sudo systemctl restart php7.4-fpm


sudo cp default /etc/nginx/sites-enabled/

sudo nginx -t

chmod -R a+rwx typo3/

# Developer machine only 
curl -sL https://aka.ms/InstallAzureCLIDeb | sudo bash