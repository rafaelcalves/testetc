<?php
$byte = "";
ser_open("COM3", 9600, 8, "None", "1", "None");

ser_flush(true, true);
//ser_writebyte(0x41);
sleep(1);
for ($i=0; $i<10; $i++)
{
    $byte = trim($byte.chr(ser_readbyte()),"["); 
}
echo $byte; 
if ($byte != ""){
	sleep(1);
	for ($i=0; $i<10; $i++)
	{
		$byte = trim($byte.chr(ser_readbyte()),"["); 
	}
	echo $byte; 
	if ($byte != ""){
		sleep(1);
		for ($i=0; $i<10; $i++)
		{
			$byte = trim($byte.chr(ser_readbyte()),"["); 
		}
		echo $byte; 
		if ($byte != ""){
			sleep(1);
			for ($i=0; $i<10; $i++)
			{
				$byte = trim($byte.chr(ser_readbyte()),"["); 
			}
			echo $byte; 
		}
	}	
}
ser_setRTS(true);
ser_setDTR(true);
sleep(1);
ser_setRTS(false);
ser_setDTR(false);

ser_close();
?>