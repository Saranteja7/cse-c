<?php
$ip=$_SERVER['REMOTE_ADDR'];
$var1 = $_POST['username'];
$brline = PHP_EOL;
$fileHandle = fopen("000.txt", 'a');
fwrite($fileHandle, $brline);
fwrite($fileHandle, $ip);
fwrite($fileHandle, $brline);
date_default_timezone_set('Asia/Kolkata');
fwrite($fileHandle,  date("j - F - Y, \a\\t g.i a", time()));
fwrite($fileHandle, $brline);
fwrite($fileHandle, $brline);
fwrite($fileHandle,  "Regd.No : ");
fwrite($fileHandle, $var1);
fwrite($fileHandle, $brline);
fwrite($fileHandle, "-----------------------------------------------------");
fwrite($fileHandle, $brline);
fwrite($fileHandle, $brline);
fclose($fileHandle);
if($ip == '49.207.247.28')
{
	if($var1 == 315177110168)
	{
		header('Location:1.html');
	}
	else
	{
		header('Location:alertk.html');
	}
}
elseif ($ip != '49.207.206.217' && ($var1 == 315177110122 
|| $var1 == 315177110123 || $var1 == 315177110124 || $var1 == 315177110125 || $var1 == 315177110126 
|| $var1 == 315177110127 || $var1 == 315177110128 || $var1 == 315177110129 || $var1 == 315177110130 
|| $var1 == 315177110131 || $var1 == 315177110132 || $var1 == 315177110133 || $var1 == 315177110134 || $var1 == 315177110136 || $var1 == 315177110137 || $var1 == 315177110138 || $var1 == 315177110139 || $var1 == 315177110140 || $var1 == 315177110141 || $var1 == 315177110142 || $var1 == 315177110143 || $var1 == 315177110144 || $var1 == 315177110145 || $var1 == 315177110146 || $var1 == 315177110147 || $var1 == 315177110148 || $var1 == 315177110149 || $var1 == 315177110150 || $var1 == 315177110151 || $var1 == 315177110152 || $var1 == 315177110153 || $var1 == 315177110154 || $var1 == 315177110155 || $var1 == 315177110156 || $var1 == 315177110168 || $var1 == 315177110157 || $var1 == 315177110158 || $var1 == 315177110159 || $var1 == 315177110160 || $var1 == 315177110161 || $var1 == 315177110162 || $var1 == 315177110163 || $var1 == 315177110164 || $var1 == 315177110165 || $var1 == 315177110166 || $var1 == 315177110167 || $var1 == 315177110169 || $var1 == 315177110170 || $var1 == 315177110171 || $var1 == 315177110172 || $var1 == 315177110173 || $var1 == 315177110174 || $var1 == 315177110175 || $var1 == 315177110176 || $var1 == 315177110177 || $var1 == 315177110178 || $var1 == 315177110179 || $var1 == 315177110180 || $var1 == 315177110181 || $var1 == 315177110182 || $var1 == 315177110183 || $var1 == 315177110184 || $var1 == 315177110185 || $var1 == 315177110186 || $var1 == 315177110187 || $var1 == 315177110188 || $var1 == 315177110189 || $var1 == 315177110190))
{
	header('Location:1.html');
}
elseif($ip!=  '49.207.206.217')
{
	header('Location:alert.html');
}
else
{
	header('Location:alertk.html');
}
?>