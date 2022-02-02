<?php
shell_exec('chmod -R 755 .git');
shell_exec('chmod o+rw .git');
echo shell_exec('ls -ld .git');
echo '<br>';
shell_exec('cd .git && chmod o+rw index');
echo shell_exec('cd .git && ls -l index');
echo '<br>';
$output = shell_exec('cd .git && ls -la && cd ..');
echo "<pre>$output</pre>";
echo shell_exec('git pull 2>&1');
echo '<br>';
`chmod o+rw index.html`;
echo shell_exec('whoami');
$output = shell_exec('ls -la');
echo "<pre>$output</pre>";
shell_exec('touch webhook.php')
?>