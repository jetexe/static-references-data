<p align="center">
  <img alt="logo" src="https://habrastorage.org/webt/59/e8/90/59e89034d07c7166044069.png" width="100" height="100" />
</p>

# Статически данные справочников

[![Version][badge_version]][link_packagist]
[![License][badge_license]][link_license]
[![Build Status][badge_build_status]][link_build_status]
[![Downloads][badge_downloads]][link_packagist]

Данный репозиторий является хранилищем статических данных для справочников.

## Установка

### С помощью `composer`

Для установки данного пакета выполните в терминале следующую команду:

```shell
$ composer require avto-dev/static-references-data "1.*"
```

> Для этого необходим установленный `composer`. Для его установки перейдите по [данной ссылке][getcomposer].

После этого вы сможете удобно получать доступ к данным, например - следующим образом:

```php
use AvtoDev\StaticReferencesData\StaticReferencesData;

StaticReferencesData::getAutoCategoriesData(); // [...]
StaticReferencesData::getAutoRegionsData(); // [...]
StaticReferencesData::getRegistrationActionsData(); // [...]
```

## Использование

Читайте контент справочников, и используйте его в своих приложениях.

## Поддержка и развитие

Если у вас возникли какие-либо проблемы по работе с данным пакетом, пожалуйста, создайте соответствующий `issue` в данном репозитории.

Если вы способны самостоятельно реализовать тот функционал, что вам необходим - создайте PR с соответствующими изменениями. Крайне желательно сопровождать PR соответствующими тестами, фиксирующими работу ваших изменений. После проверки и принятия изменений будет опубликована новая минорная версия.

## Лицензирование

Код данного пакета распространяется под лицензией **MIT**.

[badge_version]:https://img.shields.io/packagist/v/avto-dev/static-references-data.svg?style=flat&maxAge=30
[badge_license]:https://img.shields.io/packagist/l/avto-dev/static-references-data.svg
[badge_build_status]:https://scrutinizer-ci.com/g/avto-dev/static-references-data/badges/build.png?b=master
[badge_downloads]:https://img.shields.io/packagist/dt/avto-dev/static-references-data.svg?style=flat&maxAge=30
[link_packagist]:https://packagist.org/packages/avto-dev/static-references-data
[link_license]:https://github.com/avto-dev/static-references-data/blob/master/LICENSE
[link_build_status]:https://scrutinizer-ci.com/g/avto-dev/static-references-data/build-status/master
[getcomposer]:https://getcomposer.org/download/