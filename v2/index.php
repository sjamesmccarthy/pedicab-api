<?php
/**
 * 
 * @package pedicab-api
 * @version  2.0
 * @author  sjamesmccarthy @git
 * @copyright  2022
 * @license http://opensource.org/licenses/GPL-3.0 GPL-3.0
 * 
 * @uses php -S localhost:8000
 * 
 */

require 'api.php';

$app = new v2\Pedicab\Api();
$app->route();

exit;