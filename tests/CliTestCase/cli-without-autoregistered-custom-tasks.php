<?php
/**
 * Script to test the output from Doctrine_Cli
 *
 * @author Dan Bettles <danbettles@yahoo.co.uk>
 */

require_once dirname(__DIR__, 2) . '/lib/Doctrine/Core.php';
spl_autoload_register(array('Doctrine_Core', 'autoload'));

require_once(__DIR__ . '/TestTask02.php');

$cli = new Doctrine_Cli(array('autoregister_custom_tasks' => false));
$cli->run($_SERVER['argv']);
