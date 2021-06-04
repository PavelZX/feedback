![Yii Logo](https://www.yiiframework.com/image/yii_logo_light.svg)
# Yii 2 Advanced Project Template With Few Additions

![GitHub release (latest by date)](https://img.shields.io/github/v/release/deadmantfa/yii2-advanced-template-starter?style=for-the-badge)
![GitHub Release Date](https://img.shields.io/github/release-date/deadmantfa/yii2-advanced-template-starter?style=for-the-badge)
![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/deadmantfa/yii2-advanced-template-starter?style=for-the-badge)
![GitHub release (latest by SemVer)](https://img.shields.io/github/downloads/deadmantfa/yii2-advanced-template-starter/latest/total?sort=semver&style=for-the-badge)
![Packagist Stars](https://img.shields.io/packagist/stars/deadmantfa/yii2-advanced-template-starter?style=for-the-badge)
![Maintenance](https://img.shields.io/maintenance/yes/2021?style=for-the-badge)
![GitHub](https://img.shields.io/github/license/deadmantfa/yii2-advanced-template-starter?style=for-the-badge)

Yii 2 Advanced Project Template is a skeleton Yii 2 application best for developing complex Web applications with
multiple tiers.

Uses Vagrant development environment, local usage without vagrant is possible but will not be supported by me there are
other tutorials that can help you.

This template is created reduce repetitive work that is required to start off a project with all the modern must
haves...

## Features

* User Module, RBAC & 2FA - [Yii2 Usaruio](https://yii2-usuario.readthedocs.io/en/latest/)
* OAuth2 Server Implementation - [Yii2 OAuth2 Server](https://github.com/chervand/yii2-oauth2-server)
* ElasticSearch Implementation - [Yii2 ElasticSearch](https://github.com/Mirocow/yii2-elasticsearch)
* ElasticSearch Logs - [Yii2 ElasticSearch Log](https://github.com/Mirocow/yii2-elasticsearch-log)
* ElasticSearch Debug - [Yii2 ElasticSearch Debug](https://github.com/Mirocow/yii2-elasticsearch-debug)
* Enhanced Gii - [Yii2 Enhanced Gii](https://github.com/mootensai/yii2-enhanced-gii)
* Relationship Trait (Save Related Models) - [Yii2 Relation Trait](https://github.com/mootensai/yii2-relation-trait)
* RESTful APi Structure
* [ElasticSearch & Kibana](https://www.elastic.co/products/elastic-stack)
* Local SSL - [mkcert](https://github.com/FiloSottile/mkcert)
* Vagrant - [Vagrant](https://www.vagrantup.com/)
* Audit Trail - [Yii2 Audit](https://bedezign.github.io/yii2-audit/)
* AdminLTE Theme v3 (Added to the backend) - [Yii2 Adminlte Asset](https://github.com/dmstr/yii2-adminlte-asset)
* Multi-Channel Notification System (Added to the backend)
  - [Yii2 Notification](https://github.com/webzop/yii2-notifications)
* Websocket Based Chat System (Added to the backend) - [Yii2 Websocket](https://github.com/consik/yii2-websocket)

## Installation/Usage

- [Wiki](https://github.com/deadmantfa/yii2-advanced-template-starter/wiki)
- [Getting Started](https://github.com/deadmantfa/yii2-advanced-template-starter/wiki/Getting-Started)
- [Setting Up](https://github.com/deadmantfa/yii2-advanced-template-starter/wiki/Setting-up)

RUN
Clone this sources from Git
Run vagrant up.
It will start VM creation and Provisioning. Could take some time 15-30 min... Drink coffee and get back for complete virtual server with Yi2 project ready for play !
If you got an error regarding Composer and GitHub API requests limitation during provisioning - go to /provisioning/main.yml, uncomment var and add your GitHub oAuth token into github_oauth_token variable
PLAY
Ok, now if everything went fine you can access these Urls in your browser

http://yii2.local/ - frontend app

http://admin.yii2.local/ - backend app

http://phpmyadmin.yii2.local/ - phpMyAdmin

http://adminer.yii2.local/ - Adminer (Lightweight and simple GUI manager for MySQL, PostgreSQL, SQLite, MS SQL, Oracle, SimpleDB, Elasticsearch and MongoDB)

Gii code generator should be called like this http://yii2.local/index.php?r=gii

Note : These local domains .local will be available on your host machine only if hosts file was modified correctly. It should be done automatically by vagrant-hostsmanager plugin. But if url http://yii2.local/ or other is not found by your browser - make sure your hosts file contain correct assignment of VM IP and local domains:
It should have such lines :

192.168.33.33 yii2.local
192.168.33.33 admin.yii2.local
192.168.33.33 phpmyadmin.yii2.local
192.168.33.33 adminer.yii2.local
File location. On Linux /etc/hosts. On Windows %SystemRoot%\system32\drivers\etc\hosts

Let's make something
Go to Gii
Go to Model Generator
Input there ...  
Table Name : actor  
Model Class : Actor  
Namespace : frontend\models

Press - Preview and then Generate
Go to CRUD Generator
Input there ...  
Model Class : frontend\models\Actor  
Search Model Class : frontend\models\ActorSearch  
Controller Class : frontend\controllers\ActorController

Press - Preview and then Generate
And now your Actor CRUD page is generated. You can access it here http://yii2.local/index.php?r=actor
Continue playing with other Models, modify code (on your host machine in folder .../try-yii2/yii2-app-advanced) make relations between Models etc. Whatever you wish!
Getting deeper ...
In try-yii2 folder run vagrant ssh to access virtual dev server via SSH. You can modify and setup additionally anything you want.
Or modify Ansible provisioning YML files (if you are familiar with it) and run vagrant provision to update server config (WARNING! I can't guarantee that your changes will not be overwritten!)
