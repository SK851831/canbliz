<?php
include("subject.php");
?>
<div id="nav">
<nav>
<h3>Navigation</h3>
<ul>
<?php
echo "<li><a href=\"default.php\">Home</a>\n</li>";
for($i=0;$i<8;$i++)
{
if($subject[$i]==$name)
echo "$subject[$i]";
else
echo "<li><a href=\"$subcode[$i].php\">$subject[$i]</a></li>  ";
}
?>
</ul>
</nav>
</div>