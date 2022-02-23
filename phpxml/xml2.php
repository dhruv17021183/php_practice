<?php
// phpinfo();
// error_reporting(E_ALL);
// init_set('display_errors',1);
// $myXMLData =
// "<?xml version='1.0' encoding='UTF-8'
// <!--  <note>
// <to>Tove</to>
// <from>Jani</from>
// <heading>Reminder</heading>
// <body>Don't forget me this weekend!</body>
// </note>";

// $xml=simplexml_load_string($myXMLData) or die("Error: Cannot create object");
// print_r($xml); -->
$parser=xml_parser_create();

function start($parser,$element_name,$element_attrs){
    switch($element_name){
        case "NOTE";
        echo "--NOTE--<br>";
        break;
        case "TO";
        echo "To: ";
        break;
        case "FROM";
        echo "From: ";
        break;
        case "HEADING";
        echo "Heading: ";
        break;
        case "BODY";
        echo "Message";
    }
}
function stop($parser,$data){
    echo "<br>";
}
function char($parser,$data){
    echo $data;
}
// Specify element handler
xml_set_element_handler($parser,"start","stop");

// Specify data handler
xml_set_character_data_handler($parser,"char");

// Open XML file
$fp=fopen("note.xml","r");

// Read data
while ($data=fread($fp,4096)) {
  xml_parse($parser,$data,feof($fp)) or
  die (sprintf("XML Error: %s at line %d",
  xml_error_string(xml_get_error_code($parser)),
  xml_get_current_line_number($parser)));
}

// Free the XML parser
xml_parser_free($parser);
?>