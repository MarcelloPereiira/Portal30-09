<?php 
require "conexao.php";
	function array_to_xml($data, &$xml_data) {
		foreach ($data as $key => $value) {
			if (is_array($value)) {
				if (is_numeric($key)) {
					$key = 'item'.$key;	
				}
				$subnode = $xml_data->addChild($key);
				array_to_xml($value,$subnode);
			} else{
				if (is_numeric($key)) {
					$key = 'item'.$key;	
				}
				$xml_data->addChild($key, htmlspecialchars($value));
			}
		}
	}

$sql = $pdo->query("SELECT MACHETE_NOT,RESUMO_NOT,TEXTO_NOT FROM noticias");
if ($sql->rowCount() > 0) {
	$data = $sql->fetchAll(PDO::FETCH_ASSOC);
}

$xml_data = new SimpleXMLElement('<data/>');

array_to_xml($data, $xml_data);

$result = $xml_data->asXML();
header('content-type: text/xml');
echo $result;
?>