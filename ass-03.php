<?php 
// echo '<p>Hello World</p>'; 
require 'vendor/autoload.php';
include 'CommandLine.php';
use MathPHP\LinearAlgebra\Matrix;
use MathPHP\LinearAlgebra\MatrixFactory;
use MathPHP\Functions\Polynomial;
$args = CommandLine::parseArgs();
$file_name=$args['args'][0];
$fp = fopen($file_name,'r');
$data=[];
// $i=0;
if (file_exists($file_name)) 
{
    // echo "THB\tCHY\n";
    while(!feof($fp))
        $line = fgets($fp);

        array_push($data,$line);
        // $data[$i++]=$line;
        // echo (int)$line."\t123\n";
    }
}
$num=(int)$data[0];
for ($i=0; $i < $num; $i++) { 
    $tmp_res=preg_replace("/\s(?=\s)/","\\1",$data[$i+1]);
    $tmp_res=trim($tmp_res);
    $tmp_res=explode(" ",$tmp_res);
    for ($k=0; $k < $diam[1]; $k++) { 
        $tmp_res[$k]=floatval($tmp_res[$k]);
    }
    $polynomial   = new Polynomial($tmp_res);
    $roots      = $polynomial->roots();
    array_push($a1,$roots);
    echo $roots."\n";
}

?>