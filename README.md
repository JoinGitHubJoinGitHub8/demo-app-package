# FFCMS 3 demo package
This is a simple example of ffcms package, contains admin and user side application. Based on it you can build your own applications package for ffcms. 

This package can be installed using composer:

``composer require "phpffcms/demo-app-package"``

then go to admin panel -> applications -> install app -> enter "Demoapp" and press "try install"

# About demo package
This package contains:

* 2 controllers: src/Apps/Controller/[Admin|Front]/Demoapp.php
* few prepared views: src/Apps/View/[Admin|Front]/default/demoapp/
* Internalization package: src/I18n/[Admin|Front]/ru/
* 2 models: src/Apps/Model/Admin/Demoapp/
* 1 active record example: src/Apps/ActiveRecord/
