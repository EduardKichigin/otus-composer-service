# otus-composer-service-eduard

 Библиотека ничего полезного не делает, кроме как посчитает длинну переданной строки. Просто тренировка работы с composer. 
 
## Требования

- PHP 7.4 и выше

## Установка

composer require ekichigin/otus-composer-package-eduard

## Использование

$processor = new StringProcessor();

echo $processor->getLength('string'); // 9
