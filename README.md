# zoom-api-php-client
Zoom.us API v2 client for PHP

### Installation

Add the following repository source to your composer.json:

```
"repositories": [
      {
            "type": "vcs",
            "url": "https://github.com/vadimipatov/zoom-api-php-client"
      }
]
```

Require via composer:

```
composer require usabilitydynamics/zoom-api-php-client
```

Initialize:

```
use UDX\Zoom\Zoom;
$zoom = new Zoom( <api_key>, <secret_key> );
```

Use:

```
$meetings = $zoom->meetings->list( <user_id> );
```
