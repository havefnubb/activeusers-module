Activeusers module
==================

This is a module for Jelix, allowing to know how many users are using the
application since last minutes, and to know who they are.

Some "zones" are provided to display these informations in your application.

This module is for Jelix 1.7.2 and higher.

It was originally developped into the [Havefnubb project](https://github.com/havefnubb/havefnubb/).

Setting up the module
=====================

The best method is to use Composer.

In a commande line inside your project, execute:

```
composer require "havefnubb/activeusers-module"
```

Launch the configurator for your application to enable the module

```bash
php dev.php module:configure activeusers
php dev.php module:configure activeusers_admin
```

After configuring the module, you should launch the installer of your application
to activate the module:

```bash
php install/installer.php
```

You should attach url of activeusers_admin to the admin entrypoint of your
application. Exemple, in your `app/system/urls.xml`:

```xml
<classicentrypoint name="admin" default="false" noentrypoint="false">
    ...
   <url pathinfo="/admin/activeusers" module="activeusers_admin" include="urls.xml"/>
    ...
</classicentrypoint>

```
