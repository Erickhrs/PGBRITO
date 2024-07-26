<?php
    libxml_use_internal_errors(use_errors: true);
    $body = file_get_contents(filename:'https://www.eztec.com.br/imoveis/');
    $document = new DOMDocument();
    $document->loadHTML($body);
    
    $xPath = new DOMXPath($document); 
   $domNodeList =  $xPath->query(expression:'//*[@id="content"]/div/section/div/div/a');
   
    /**@var DOMNode $element */
    foreach ($domNodeList as $element){
        echo $element->getAttribute('href') . PHP_EOL;
    }
    
?>