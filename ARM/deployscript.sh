az login
az account set --subscription "Microsoft Azure Internal Consumption"

az deployment group create -g ECE_WEB -t https://raw.githubusercontent.com/henrikmotzkus/typo3/main/ARM/azuredeploy.json?token=AFO2IHW7SQ3Z7OJY253WKJLAPBCJ2 -p https://raw.githubusercontent.com/henrikmotzkus/typo3/main/ARM/azuredeploy.parameters.json?token=AFO2IHTQJT5EMSVIGDZFL23APBCLE

az deployment group create -g ECE_WEB -f azuredeploy.json -p azuredeploy.parameters.json