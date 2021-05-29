<?php

use Francerz\SqlBuilder\DriverManager;
use Francerz\SqlBuilder\SqlSrv\SqlSrvDriver;

DriverManager::register('sqlsrv', new SqlSrvDriver());