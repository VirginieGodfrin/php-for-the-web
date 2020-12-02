<?php
fopen(__DIR__ . '/this-file-does-not-exist', 'r');
echo 'PHP does not stop execution, even when it triggers an error';
//throw new RuntimeException('Something went wrong');


