# DataMapper Actions

[![Latest Version](https://img.shields.io/github/release/ThrusterIO/data-mapper-actions.svg?style=flat-square)]
(https://github.com/ThrusterIO/data-mapper-actions/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)]
(LICENSE)
[![Build Status](https://img.shields.io/travis/ThrusterIO/data-mapper-actions.svg?style=flat-square)]
(https://travis-ci.org/ThrusterIO/data-mapper-actions)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/ThrusterIO/data-mapper-actions.svg?style=flat-square)]
(https://scrutinizer-ci.com/g/ThrusterIO/data-mapper-actions)
[![Quality Score](https://img.shields.io/scrutinizer/g/ThrusterIO/data-mapper-actions.svg?style=flat-square)]
(https://scrutinizer-ci.com/g/ThrusterIO/data-mapper-actions)
[![Total Downloads](https://img.shields.io/packagist/dt/thruster/data-mapper-actions.svg?style=flat-square)]
(https://packagist.org/packages/thruster/data-mapper-actions)

[![Email](https://img.shields.io/badge/email-team@thruster.io-blue.svg?style=flat-square)]
(mailto:team@thruster.io)

The Thruster DataMapper Actions.


## Install

Via Composer

``` bash
$ composer require thruster/data-mapper-actions
```


## Usage

```php
$dataMapExecutor = new DataMapActionExecutor(new DataMappers());
$executor->addExecutor($dataMapExecutor::getSupportedAction(), $dataMapExecutor);

$executor->execute(new DataMapAction('mapper_name', $object));
```


## Testing

``` bash
$ composer test
```


## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.


## License

Please see [License File](LICENSE) for more information.
