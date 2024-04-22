<!DOCTYPE html>
<html>
<body>
<?php
$db_handle = pg_connect("host=77.37.172.196:25565 dbname=postgres user=postgres password=35vpP6Erxdh%WJC");
if ($db_handle) {
echo 'Connection attempt succeeded.';
} else {
echo 'Connection attempt failed.';
}
pg_close($db_handle);
?>
</body>
