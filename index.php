<?php
namespace Scaffold;

use Scaffold\Views\View;

require "vendor/autoload.php";

$loader = new \Twig_Loader_Filesystem('src/Views/');
$twig = new \Twig_Environment($loader, []);

$template = $twig->load('index.html');
// $template_data = $data_handler->getDataForTemplate($game_data, $_SESSION);

$template_data = [
    'some_rendered_data' => 100
];

echo $template->render($template_data);