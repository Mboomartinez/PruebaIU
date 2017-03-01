<?php


class Prueba
{
    private $numElem;

    function __construct($num = 7)
    {
        $this->numElem = $num;
    }
    function generarHtml()
    {
        $html = "";
        $html = $html . "<h2> prueba desde php</h2>";
        $html = $html . ("<a href='http://www.google.com/'>Enlace</a>");
        $html = $html . "</ul>";

        for ($i = 1; $i <= $this->numElem; $i++) {
            $html = $html . "<li> $i </li>";
        }
        $html = $html . "</ul>";
        return $html;
    }
}