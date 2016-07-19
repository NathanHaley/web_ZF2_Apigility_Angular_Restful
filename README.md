Web_ZF2_Apigility_Angular_Restful
==============================

This project is for demonstration and learning for PHP, Zend framework 2, Apigility, Angular, and Restful APIs.

Site is mainly intended as a API server for other sites.

Currently serving RESTful APIs for zf2.nathanhaley.com.


Main Components
------------
What is included basically, don't need to install when cloned.

ZF2 Skeleton Application:
https://github.com/zendframework/ZendSkeletonApplication

Apigility:
https://apigility.org/documentation/recipes/apigility-in-an-existing-zf2-application

ZfrCors:
https://github.com/zf-fr/zfr-cors

Additional Apigility Modules Installed:

Documentation:
https://github.com/zfcampus/zf-apigility-documentation

Swagger Documentation:
https://github.com/zfcampus/zf-apigility-documentation-swagger

Angular: version 1.5.5
https://angularjs.org/


Installation
------------

```
git clone https://github.com/NathanHaley/web_ZF2_Apigility_Angular_Restful.git /pathToYourProjectRoot

cd /pathToYourProjectRoot
```

Install composer if not already installed.
```
curl -sS https://getcomposer.org/installer | php
```

Install packages/modules
```
php composer.phar install
```

Create config/autoload/local.php from dist file.
```
cp config/autoload/local.php.dist  config/autoload/local.php
```

Edit the file config/autoload/local.php to replace the empty return array statement with the following configuration.
```
return array(
    'statuslib' => array(
        'array_mapper_path' => 'data/statuslib.php',
    ),
);
```

ZFrCors Setup here:
https://apigility.org/documentation/recipes/allowing-request-from-other-domains

Missing database setup. Assumes you have a database, MySQL, with setup as user/db named 'projects' and a table called 'projects' with columns id,name,site,description.
```
TODO: database setup details.
```

Will need to update config/autoload/local.php with database and adaptor details or recreate from Aigility based on details provide just above. Steps coming soon...

From the site's root dir, put in development mode.
```
php public/index.php development enable
```

Run PHP's development server.
```
php -S 0.0.0.0:8888 -ddisplay_errors=0 -t public public/index.php
```

Pages that should be available:
- Main page: http://localhost:8888/
- Apigility Admin: http://localhost:8888/apigility/ui
- Apigility Swagger: http://localhost:8888/apigility/swagger
- Projects List: http://localhost:8888/company/projects



