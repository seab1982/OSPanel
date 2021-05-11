<?php
require_once 'jsonadapter.php';
require_once 'xmlbaza.php';
require_once 'data.xml';
require_once 'data1.json';

class Adapter extends XmlData
{
     private $jsonArray ;

    public function __construct( $jsonArray)
    {
        $this->jsonArray = $jsonArray;
    }

    public function xmlResult()
    {

        $xml = new \SimpleXMLElement('data.xml');

        return $this->xmlConverter($this->jsonDecoder(), $xml);
    }

    private function jsonDecoder()
    {
        return json_decode($this->jsonArray);
    }

    private function xmlConverter($array, $xml)
    {


        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $this->xmlConverter($value, $xml->addChild($key));
            } else {
                $xml->addChild('data.xml', $value);
            }
        }

        return $xml->asXML();
    }
}



