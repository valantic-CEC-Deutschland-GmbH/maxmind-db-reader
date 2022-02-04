# MaxMind DB Reader

[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%207.3-8892BF.svg)](https://php.net/)

MaxMind GeoIP2 DB Reader Spryker implementation

A client layer abstraction to use MaxMind GeoIP2 DB Reader.  Refer to https://www.maxmind.com/ for documentation of the API.

## Integration

### Add composer registry
```
composer config repositories.gitlab.nxs360.com/461 '{"type": "composer", "url": "https://gitlab.nxs360.com/api/v4/group/461/-/packages/composer/packages.json"}'
```

### Add Gitlab domain
```
composer config gitlab-domains gitlab.nxs360.com
```

### Authentication
Go to Gitlab and create a personal access token. Then create an **auth.json** file:
```
composer config gitlab-token.gitlab.nxs360.com <personal_access_token>
```

Make sure to add **auth.json** to your **.gitignore**.

### Install package
```
composer req valantic-spryker/maxmind-db
```

### Update your shared config
```
$config[MaxmindDbConstants::MAXMIND_DB_FILE_LOCATION] = APPLICATION_ROOT_DIR . '/data/GeoLite2-Country.mmdb';
```

### Usage
Inject

`\ValanticSpryker\Client\MaxmindDb\MaxmindDbClient`

where you need it.
