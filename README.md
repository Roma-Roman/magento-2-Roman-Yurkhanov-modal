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
Coming soon

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
