<?php
echo shell_exec('chmod -R o+rw .git');
echo shell_exec('git reset --hard HEAD && git pull 2>&1');
echo '<br>';
`chmod o+rw index.html`;
echo shell_exec('whoami');
$output = shell_exec('ls -la');
echo "<pre>$output</pre>";
shell_exec('touch webhook.php')
?>