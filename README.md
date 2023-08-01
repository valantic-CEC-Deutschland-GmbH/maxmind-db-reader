# MaxMind DB Reader

[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%207.3-8892BF.svg)](https://php.net/)

MaxMind GeoIP2 DB Reader Spryker implementation

A client layer abstraction to use MaxMind GeoIP2 DB Reader.  Refer to https://www.maxmind.com/ for documentation of the API.

### Install package
```
composer req valantic-cec/maxmind-db
```

### Update your shared config
```
$config[MaxmindDbConstants::MAXMIND_DB_FILE_LOCATION] = APPLICATION_ROOT_DIR . '/data/GeoLite2-Country.mmdb';
```

### Usage
Inject

`\ValanticSpryker\Client\MaxmindDb\MaxmindDbClient`

where you need it.
