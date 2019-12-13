<?php
echo "Hello World" ;
$zmienna = "test";
echo $zmienna;
$who = "world";
print "Hello $who";
print 'Hello $who';
print "\n";
$n = 2;
if ($n>0)
    print "Positive";
else if ($n<0)
     print "Negative";
else
    print "0 value";
print "\n";
$a = $_GET['a'] ?? 0;
while ($a<10) {
    print("$a ");
    $a++;
}
print "\n";

do {
    print("$a ");
    $n++;
} while ($a < 10);
print "\n";

for ($a=1; $a<10; $a++) print("$a");
print "\n";

$myArray = [0, 1, 2];
foreach($myArray as $item) print("$item");
print "\n";

echo $_GET['ala'];