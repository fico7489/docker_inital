<?php

echo 'test...'. "<br/>";

$processUser = posix_getpwuid(posix_geteuid());

print 'NAME=' . $processUser['name'] . "<br/>";
print 'UID=' . Posix_geteuid() . "<br/>";

//mkdir('uploads/aaaa');

