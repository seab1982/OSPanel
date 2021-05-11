<?php

class XmlData
{
    const XMLDATA = 'data.xml';

    public function xmlput($xml)
    {
        $file = fopen(self::XMLDATA, 'a+');
        fwrite($file, $xml);
        fclose($file);
    }
}