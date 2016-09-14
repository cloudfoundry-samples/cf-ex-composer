CloudFoundry PHP example application:  composer
===============================================

This is an very basic example application that demonstrates using Composer with the [PHP Buildpack](https://github.com/cloudfoundry/php-buildpack).

The application installs some packages using Composer, sets the PHP version and includes some platform extensions.  Accessing the application in the browser will just log a statement using one of the included packages.  It provides a link to the log (something you would not normally do) so that you can verify it's working.

Usage
-----

Clone the app and push it to CloudFoundry.

```
git clone https://github.com/cloudfoundry-samples/cf-ex-composer
cd cf-ex-composer
cf push
```

Access your application URL in the browser.
