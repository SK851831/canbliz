<?php
$count--;
while($count>=0)
{
echo "<a href=\"$file[$count]\">$filename[$count]</a><br/>";
echo "<h4>$desc[$count]</h4>";
$count--;
}
?>