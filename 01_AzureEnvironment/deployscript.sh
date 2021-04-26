#!/bin/sh

RESOURCE_GROUP='typo3test4'
LOCATION='westeurope'

az login

az account set --subscription "Microsoft Azure Internal Consumption"

az group create --name $RESOURCE_GROUP --location $LOCATION


#Deploy VNET
az deployment group create -n VNET -g $RESOURCE_GROUP -f ./System/01_AzureEnvironment/01_VNET/azuredeploy.json -p ./System/01_AzureEnvironment/01_VNET/azuredeploy.parameters.json

az deployment group create -n typo3 -g $RESOURCE_GROUP -f ./System/01_AzureEnvironment/01_INFRA/azuredeploy.json -p ./System/01_AzureEnvironment/01_INFRA/azuredeploy.parameters.json --parameters vmssName=$RESOURCE_GROUP


az deployment group create -g ECE_WEB -t https://raw.githubusercontent.com/henrikmotzkus/typo3/main/ARM/azuredeploy.json?token=AFO2IHW7SQ3Z7OJY253WKJLAPBCJ2 -p https://raw.githubusercontent.com/henrikmotzkus/typo3/main/ARM/azuredeploy.parameters.json?token=AFO2IHTQJT5EMSVIGDZFL23APBCLE

az deployment group create -g ECE_WEB -f azuredeploy.json -p azuredeploy.parameters.json


