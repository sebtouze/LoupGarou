LoupGarou
=========

Version Notes
-------------

The current version on thos files is v0.1. 
This version is under development and cannot be considered as stable or usable in production. 
In particular be aware that: 
* database schema may and will evolve from one version to the other with no guaranty on data preservation. Upgrading from one version to the other may erase existing data in previous intallation. 
* Some function are not fully develop, in particular for now there is no easy way to add users (you need to use fosUserBundle console commands and manualy complete some fields in the database)
* The version can contain many bugs (if you found one please share it on the Github issue tracker at https://github.com/sebtouze/LoupGarou/issues)

If you consider using the application, please use the master branch with is the most stable one. 
As I am using Git Flow for this project developement workflow, the development branch contains all the work between 2 versions of the app. 

What is this ? 
--------------

This is an web application based on the game 'Les Loups Garous de Tiercelieux' and is made to allow a life size game. 
This is purely amateur work and not related in any way to the initial game author or any publishing company. 

This application is based on the [Symfony](http://symfony.com) framework. 

Installation
------------

To set up the application on an web server, follow those steps. 
To set the application in production you need to configure properly your web server appropriately, it needs to be able to run PHP 5.5.9+ and you also need a MySQL/MariaDB server.
For development or testing you may not need a web server as Symfony provide a PHP build-in web-server (see bellow to use it), you still need PHP and a database. 

1. Create a MySQL/MariaDB database and user with rights on it. 
* Get the project files using `git clone https://github.com/sebtouze/LoupGarou.git` in a console
  * This is if you have git installed and should be the easiest way to update project code later on or if you want to contribute. 
  * You also can go to [https://github.com/sebtouze/LoupGarou]() download the code and extract the zip in a folder. 
* In a console go to to application folder and use composer to update the application with all vendors bundles (the project repository only stores the application code) 
```
$ cd LoupGarou/ 
$ composer update
```
  * If you don't already have composer installed on your machine go to [http://symfony.com/doc/current/cookbook/composer.html]()
  * This process usually takes a few minutes to get all required bundles. 
* During the composer update process it will ask you for the database connection information. 
* Check that your web server has write access to `app/log/*` and `app/cache/*` (this is not required if you use the build-in web server). 
* Create the database tables with `php app/console doctrine:schema:update -f` command. 
* Dump all assets using `php app/console assetic:dump --env=prod` (if you are in development mode change 'prod' for 'dev')
* For testing or development *only*, execute `php app/console server:run` then the server will be accessible at [localhost:8000](), For production server go the the address defined in the web server. 
* Go to to [your_server_adress/initialize](), the database will be initialize with appropriate values and you will be redirected to the public game homepage
* Application is ready to play !

To start a new game just go to the [your_server_adress/initialize]() address. 
An access control to this function will be implemented later on, for now be warn that anybody can go there! 

How to contribute
------------------

To be completed

License
-------
The source code of this project is under GNU GPL v2 license. A LICENSE file containing a copy of the GPLv2 licence must be included with the project, the license is also available at http://www.gnu.org/licenses/gpl-2.0.html. 

The Lycanthrope font is a work from Chad Savage, and is not licensed, it is available at http://www.sinisterfonts.com
The Twitter Bootstrap CSS code is under the Apache2 license, the last code version is available at http://getbootstrap.com
The wallpapers are copyright from their authors, see the following paragraphs for details. 

The day wallpaper is based on a work from Alex Cican who authorize us to use it in this project. The original work can be seen at http://sican.deviantart.com/art/Village-32113050 all right on this work are reserved to Alex Cican. 

The night wallpaper is a work from Jeremy Vickery who authorize us to use it in this project. All right on this work are reserved to him, the picture is picked from jermilex.deviantart.com/art/The-Village-Fountain-51539877
