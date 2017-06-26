<?php

$app->get('/', 'Bike\Controller\IndexController:indexAction');

$app->get('/admin', 'Bike\Controller\IndexController:getAdminAction');



