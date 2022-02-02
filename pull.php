<?php
`git pull`;
`chmod o=rw index.html`;
echo shell_exec('whoami');
$output = shell_exec('ls -la');
echo "<pre>$output</pre>";
?>