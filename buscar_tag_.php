<?php
echo "PHP serial extension version ".ser_version();
echo "<br>\r\n";

if (ser_isopen() == true )
    echo "Port is open<br>\r\n";
else
    echo "Port is closed<br>\r\n";

echo "Opening the port ...\r\n";
echo "<br>\r\n";
echo "Result = ";
echo ser_open("COM3", 9600, 8, "None", "1", "None");
echo "<br>\r\n";

if (ser_isopen() == true )
    echo "Port is open<br>\r\n";
else
    echo "Port is closed<br>\r\n";

sleep(1);
echo "Bytes available for reading: ".ser_inputcount()."<br>\r\n";

echo "Reading (byte) ...\r\n";

for ($i=0; $i<10; $i++)
{
    $j = ser_readbyte();
    $byte = $byte.$j;
    echo sprintf("%c", $j);
}
echo $byte;
echo "<br>\r\n";

echo "Closing the port ...\r\n";
echo "<br>\r\n";
echo "Result = ";
echo ser_close();
echo "<br>\r\n";

if (ser_isopen() == true )
    echo "Port is open<br>\r\n";
else
    echo "Port is closed<br>\r\n";
return $byte;
?>
