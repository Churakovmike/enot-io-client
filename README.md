Enot.io php api package
========================

Installation
--------------
```php
composer require churakovmike/enot-io-client
```
or with composer.phar
```php
php composer.phar require churakovmike/enot-io-client
```

Usage
------
Initialize api client in your code. There are two way.
```php

use ChurakovMike\EnotIO\Client;

$client = new Client([
    'merchantId' => 'your-merchant-id',
    'secretWord' => 'your-secret-word',
    'apiKey' => 'your-api-key',
    'email' => 'your-email',
]);
```
All parameters in constructor are optional. You can set or change it later.
```php
use ChurakovMike\EnotIO\Client;

$client = new Client();
$client->setMerchantId('your-merchant-id');
$client->setSecretWord('your-merchant-id');
$client->setApiKey('your-api-key');
$client->setEmail('your-email');
```

### Methods
#### Get balance
```php
use ChurakovMike\EnotIO\Client;

$client = new Client([
    'api_key' => 'your-api-key',
    'email' => 'your-email',
])

$balance = $client->getBalance();
```

#### Get available payment services
```php
use ChurakovMike\EnotIO\Client;

$client = new Client([
    'merchantId' => 'your-merchant-id',
    'secretWord' => 'your-secret-word',
])

$paymentServices = $client->getAvailablePaymentServices();

```

#### Withdraw money
```php
use ChurakovMike\EnotIO\Client;

$client = new Client([
    'api_key' => 'your-api-key',
    'email' => 'your-email',
])

$paymentServices = $client->getAvailablePaymentServices($service, $wallet, $amount);
```

#### Generate payment link
[See methods signature]()