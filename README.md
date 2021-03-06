# 项目说明
一个简易歌单系统

## 环境示例
使用dnmp的docker环境
停止正在运行的容器：docker stop $(docker ps -a -q)
进入容器：docker exec -it dnmp_php72_1 /bin/bash

## 运行
php init 初始化开发环境
在common/config/main-local.php配置数据库连接
composer install
php yii migrate 迁移 

打开 http://localhost/music/frontend/web/index.php
http://localhost/music/backend/web/index.php?r=gii

# 简易歌单系统 beta 1.0
### 2018年12月21日更新
- 更新歌单类的操作（添加，更新，列表，详情）
- 更新面包屑

DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
    tests/               contains tests for common classes    
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for backend application    
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for frontend application
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
```
