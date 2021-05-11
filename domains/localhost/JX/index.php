<?php

//$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

//$json_kod = json_decode($jsonobj, true);

//class Adapter
//{
//    public static function jsonBaza
//
//}
//namespace Adapters;
//
//class DataAdapter
//{
//    public const XML_ROOT_NODE = 'root';
//    public const XML_DEFAULT_NODE_NAME = 'node';
//
//    public static function jsonAsXML($json)
//    {
//        $xml = new \SimpleXMLElement('<' . self::XML_ROOT_NODE . '/>');
//        self::insertNodeXML($xml, 0, json_decode($json));
//        return $xml->asXML();
//    }
//
//    private static function insertNodeXML(&$parent, $key, $element)
//    {
//        if (in_array(gettype($element), ["array", "object"])) {
//            $node = $parent->addChild(self::xmlNodeName($key), "");
//            if (gettype($element) === "object") {
//                $properties = get_object_vars($element);
//                foreach ($properties as $key => $value) {
//                    if (!in_array(gettype($value), ["array", "object"])) {
//                        $node->addAttribute($key, $value);
//                    } else {
//                        self::insertNodeXML($node, $key, $value);
//                    }
//                }
//            } elseif (gettype($element) === "array") {
//                foreach ($element as $key => $value) {
//                    self::insertNodeXML($node, $key, $value);
//                }
//            }
//        } else {
//            $parent->addChild(self::xmlNodeName($key), $element);
//        }
//    }
//
//    private static function xmlNodeName($key)
//    {
//        return (gettype($key) === 'integer') ? self::XML_DEFAULT_NODE_NAME : $key;
//    }
//}


/*
 * Homework 11.
 * Разработать адаптер по модификации данных из JSON в XML
 */

$json1 = '{
    "prop1": 11,
    "prop2": "vovan",
    "prop3": [
        12,
        13,
        17
    ],
    "prop4": [
        "variable 1",
        "variable 4",
        {
            "var1": "variable 2",
            "var2": "variable 2"
        },
        "variable 3"
    ]
}';

$json2 = '
[
        "variable 1",
        "variable 4",
        {
            "var1": "variable 2",
            "var2": "variable 2"
        },
        "variable 3"
    ]
';

header("Content-type: text/xml");
require_once "DataAdapter.php";

use Adapters\DataAdapter;

echo DataAdapter::jsonAsXML($json1);
//echo DataAdapter::JSONasXML($json2);