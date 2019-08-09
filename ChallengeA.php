<?php

function genrataeCodeProgram()
{
	if(!file_exists("data.txt"))
	{
		
		file_put_contents('data.txt', a_sting());
	}

	$file="data.txt";
	$fo=fopen($file, "r");
	$fz=filesize($file);
	$fr=fread($fo, $fz);
	fclose($fo);
	$input_data=explode(",", $fr);
	echo "File Size : ";
	print_r($fz);
	$a=0+count($input_data);
	if($fz<10485760)
	{
			do
		{
			$input_data[$a]=a_sting();
			$a++;
			$input_data[$a]=random_integer();
			$a++;
			$input_data[$a]=reaL_number();
			$a++;
			$input_data[$a]=alphanumeric();		
			
			$a++;
		}
		while ($a<704700);

		//print_r($input_data);
		$fsave=fopen("data.txt", "w");
		fwrite($fsave, implode(",",$input_data));
		fclose($fsave);
	}
	
}

function a_sting() // alphabetical String
{
	$a=array('b','c','d','f','g','h','j','k','l','m','n','p','q','r','s','t','v','w','x','w','z','a','i','u','e','o');
	$b=array(10000,100000000,100000000000000,10000000000000000); // Max Digit
	$d=(String)random_int(1000,$b[array_rand($b)]);
	for($j=0; $j<strlen($d); $j++)
	{
		$k[$j]=substr($d, $j,1);
	}

	for($i=0; $i<strlen($d); $i++)
	{
		//$b=array_rand($a);
		$c[$i]=$a[$k[$i]];
	}

	//$value=substr(implode("", $c), 0,11);
	return implode("", $c);
}

function random_integer() // integer
{
	$b=array(10000,100000000,100000000000000,10000000000000000); // Max Digit
	return random_int(1000, $b[array_rand($b)]);
}

function reaL_number() // real Number
{
	$a=array(9,99,999,9999,99999); // Max Digit
	$b[0]=random_int(1, $a[array_rand($a)]);
	$b[1]=random_int(1, $a[array_rand($a)]);
	$c=(Float)implode(".", $b);

	return $c;
}

function alphanumeric() // Alphabetic Number
{
	$d[0]=a_sting();
	$b=array(999,9999,999999,99999999,999999999); // Max Digit
	$d[1]=random_int(100, $b[array_rand($b)]);
	$d[2]=a_sting();
	return implode("", $d);
}

//echo preg_match('@[a-z]@');

echo "<pre>";
//$b=implode("", $a);
//print_r(a_sting());

//a_sting();
//echo "<br />";

//print_r(random_integer());

//print_r(reaL_number());

//print_r(alphanumeric());

genrataeCodeProgram();

?>