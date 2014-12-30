# Chain of Responsibility Pattern in PHP
This is an example of the Chain of Responsibility pattern. I'm using a simple DTO "HomeStatus" to store values statically as an example. 

### Example Usage
```php
<?php

require 'vendor/autoload.php';

$locks = new Locks;
$lights = new Lights;
$alarm = new Alarm;

$locks->succeedWith($lights);
$lights->succeedWith($alarm);

try {
    $locks->check(new HomeStatus);
    echo 'Your home is secure.';
} catch (Exception $e) {
    echo $e->getMessage();
}
```