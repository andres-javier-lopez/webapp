<?php

include_once 'moondragon/moondragon.manager.php';
include_once 'moondragon/moondragon.render.php';

Template::addDir('templates');

Router::addSection('index', 'modules/home.php', 'Home');