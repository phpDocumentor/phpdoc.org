<?php
$github_ips = array('207.97.227.253', '50.57.128.197', '108.171.174.178');
$local_ips  = array('127.0.0.1', '::1');

if (!in_array(@$_SERVER['REMOTE_ADDR'], array_merge($local_ips, $github_ips)))
{
    header('HTTP/1.0 403 Forbidden');
    exit('You are not allowed to access this file.');
}
chdir(__DIR__.'/..');

echo 'Updating installation<br />';
`git fetch`;
`git reset --hard origin/master`;

echo 'Updating composer<br />';
`php composer.phar install`;

echo 'Clearing cache<br />';
`php app/console cache:clear`;
`php app/console cache:warmup`;