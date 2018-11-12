<?php
$conn = pg_connect(getenv("DATABASE_URL"));
$query = 'SELECT * FROM events';
$result = pg_query($query) or die('Query failed: ' . pg_last_error());
echo "<table>\n";
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "$line";
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";
// Free resultset
pg_free_result($result);

// Closing connection
pg_close($dbconn);

?>

Hello world