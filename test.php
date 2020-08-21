<?php
// header("Content-Type: application/json");
$file = "export.csv";
$file2 = $_SERVER['DOCUMENT_ROOT']."/extract/v2/docs/".$file;

$bool = file_exists($file2);

if ($bool == false) {
    $data = array("Url delle immagini prodotto","Nome Prodotto","Descrizione","Colore","url img texture");
    $fp = fopen("docs/".$file, "a");
    fputcsv($fp, $data);
}

if ($_POST['html'] != "") {
    $data = $_POST['html'];
    $fp = fopen("docs/".$file, "a");
    foreach ($data as $key => $value) {
    	$array = explode("|",$value);
    	fputcsv($fp, $array);
    }
    fclose($fp);
}

if (isset($_GET['record'])) {
	$record = $_GET['record'];
	file_put_contents('log.log', "Record GET = ".$_GET['record']."\n", FILE_APPEND);
} else {
    //Solo la prima volta deve passare di qui perché è solo la prima volra che non c'è il parametro GET
	if (isset($_POST["record"])) {
		$record = $_POST["record"];
		file_put_contents('log.log', "Record GET  = ".$_POST["record"]."\n", FILE_APPEND);
	} else {
		file_put_contents('log.log', "NO Record\n", FILE_APPEND);
	}
}

// file_put_contents('export.csv', $data->result, FILE_APPEND);
echo $record+1;

// echo $file2;
// echo var_dump($bool);
// echo "OK";
?>
