<?php
echo date('j/n/Y');
echo "<br>";
echo date('l, d F o');
echo "<br>";
echo time();
echo "<br>";
echo date("F", time() + 24*60*60*10);
echo "<br>";
echo mktime(0,0,0,2,27,2024);
echo "<br>";
echo date("l", mktime(0,0,0,2,27,2024);