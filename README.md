# otus-composer-service-eduard

 Библиотека ничего полезного не делает, кроме как посчитает длину переданной строки. Просто тренировка работы с composer. 
 
## Требования

- PHP 7.0.33 

## Установка

```bash

composer require ekichigin/otus-composer-package-eduard

```

## Использование

```php

<?php

$processor = new StringProcessor();

echo $processor->getLength('string'); // 9

```
