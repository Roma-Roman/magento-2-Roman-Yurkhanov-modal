# RomanYurkhanov Modal for Magento 2
#### RomanYurkhanov Modal module for Magento 2

[![Latest Stable Version](http://poser.pugx.org/romanyurkhanov/module-modal/v)](https://packagist.org/packages/romanyurkhanov/module-modal)
[![Total Downloads](http://poser.pugx.org/romanyurkhanov/module-modal/downloads)](https://packagist.org/packages/romanyurkhanov/module-modal)

RomanYurkhanov Modal Extension for Magento 2,

## Features

1. Enable/Disable Extension
2. Modal timeout
3. Modal logo
4. Modal title
5. Modal message
6. Modal CTA title
7. Modal CTA url

## Extension Screenshots
<img width="1790" alt="RomanYurkhanov_Modal_1" src="https://github.com/Roma-Roman/magento-2-Roman-Yurkhanov-modal/assets/14273213/c6602235-f779-474d-b785-a0363483d1e6">
<img width="1792" alt="RomanYurkhanov_Modal_2" src="https://github.com/Roma-Roman/magento-2-Roman-Yurkhanov-modal/assets/14273213/62fe27bd-3ae0-4781-9bef-bf926bcc0b73">
<img width="1792" alt="RomanYurkhanov_Modal_3" src="https://github.com/Roma-Roman/magento-2-Roman-Yurkhanov-modal/assets/14273213/a44a323a-1fb4-4c47-b6a2-64d8c4ad4c39">
![RomanYurkhanov_Modal_4](https://github.com/Roma-Roman/magento-2-Roman-Yurkhanov-modal/assets/14273213/fc0d74db-c4a2-4e7d-8c9c-f3f68ad505de)

## How to install & upgrade RomanYurkhanov_Modal

### 1. Install via composer (recommend)

I recommend you to install RomanYurkhanov_Modal module via composer. It is easy to install, update and maintenance.

Run the following command in Magento 2 root folder.

#### 1.1 Install

```
composer require romanyurkhanov/module-modal
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```

#### 1.2 Upgrade

```
composer update romanyurkhanov/module-modal
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```

Run compile if your store in Product mode:

```
php bin/magento setup:di:compile
```

### 2. Copy and paste

If you don't want to install via composer, you can use this way. 

- Download [the latest version here](https://github.com/Roma-Roman/magento-2-Roman-Yurkhanov-modal/archive/main.zip)
- Extract `main.zip` file to `app/code/RomanYurkhanov/Modal` ; You should create a folder path `app/code/RomanYurkhanov/Modal` if not exist.
- Go to Magento root folder and run upgrade command line to install `RomanYurkhanov_Modal`:

```
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```
