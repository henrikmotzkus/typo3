#!/bin/sh
az login
az account set --subscription "Microsoft Azure Internal Consumption"
RESOURCE_GROUP='typo3test23'
LOCATION='westeurope'
az group create --name $RESOURCE_GROUP --location $LOCATION
az deployment group create -n typo3 -g $RESOURCE_GROUP -f ./System/01_AzureEnvironment/01_INFRA/azuredeploy.json -p ./System/01_AzureEnvironment/01_INFRA/azuredeploy.parameters.json --parameters vmssName=$RESOURCE_GROUP

az group delete --name typo3test20 --yes &
az group delete --name typo3test22 --yes &




# Deploy INFRA


az deployment group create -g ECE_WEB -t https://raw.githubusercontent.com/henrikmotzkus/typo3/main/ARM/azuredeploy.json?token=AFO2IHW7SQ3Z7OJY253WKJLAPBCJ2 -p https://raw.githubusercontent.com/henrikmotzkus/typo3/main/ARM/azuredeploy.parameters.json?token=AFO2IHTQJT5EMSVIGDZFL23APBCLE

az deployment group create -g ECE_WEB -f azuredeploy.json -p azuredeploy.parameters.json
