<?php
/**
 * Created by PhpStorm.
 * User: mouthliu
 * Date: 17-7-30
 * Time: 上午1:10
 */

include dirname(dirname(__FILE__))."/vendor/autoload.php";

$test = new \PhpPaxos\PhpPaxos();
$test->show();
