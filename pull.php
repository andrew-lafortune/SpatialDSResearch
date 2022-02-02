<?php
shell_exec('chmod -R o+rw .git');
shell_exec('cd .git && chmod o+rw index');
$output = shell_exec('cd .git && ls -la && cd ..');
echo "<pre>$output</pre>";
echo shell_exec('git pull 2>&1');
echo '<br>';
`chmod o+rw index.html`;
echo shell_exec('whoami');
$output = shell_exec('ls -la');
echo "<pre>$output</pre>";
?>