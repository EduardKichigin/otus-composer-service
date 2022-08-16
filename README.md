# otus-composer-service-eduard

 Библиотека ничего полезного не делает, кроме как посчитает длинну переданной строки. Просто тренировка работы с composer. 
 
## Требования

- PHP 7.4 и выше

## Установка

composer require EKichigin/otus-composer-package-eduard

## Использование

$processor = new stringProcessor();

echo $processor->getLength('string'); // 9
