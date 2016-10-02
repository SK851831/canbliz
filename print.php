<?php
$count--;

echo "<table id=\"cool\"><tr><th>File Name</th><th>Description</th></tr>";
while($count>=0)
{
echo "<tr>";
echo "<td><a href=\"$name\\$file[$count]\">$filename[$count]</a></td>";
echo "<td>$desc[$count]</td>";
echo "</tr>";
$count--;
}
echo "</table>";
echo "<p>There is no more post to show..</p>";
?>