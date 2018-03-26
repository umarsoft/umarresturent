<?php
#$c = file_get_contents('php://input');
//print_r($_POST[$c['printer_name']]).PHP_EOL;
//$cmd  =  exec("python Shell_Execute.py $c");

/*$.post("Cmd.php",{name:"Foxit Reader PDF Printer",},function(data){
            console.log(data);
        });*/

$printer_name = $_POST['name'];
$file_name = $_POST['file'];
$Text      = $_POST['Text'];
$file_handle =  fopen($file_name, 'w+');
$file_handle.write($Text);
$file_handle.close();
echo "ilove you";
echo "string".$printer_name.PHP_EOL;
echo $file_name.PHP_EOL.$Text.PHP_EOL;
$cm =  sprintf("python Shell_Execute.py '%s'",trim($printer_name));
$cmd  =  exec($cm);
echo "cmd".$cmd.PHP_EOL;
?>