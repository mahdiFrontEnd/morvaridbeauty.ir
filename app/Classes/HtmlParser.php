<?php


namespace App\Classes;


use DOMDocument;
use DOMXPath;

class HtmlParser
{
    public $tag_name, $url, $path, $html, $contents, $dom, $load, $finder, $nodes, $tags, $json = [];


    public static function getFromUrl($url)
    {
        return new url($url);
    }

    public static function getFromPath($path)
    {
        return new path($path);

    }

    public static function getFromHtml($html)
    {
        return new html($html);

    }

    public function remove_noise($noise)
    {
        $this->contents = str_replace($noise, "", $this->contents);

        return $this;
    }

    /*
       (string) $name Name of the function that you will add to class.
       Usage : $Foo->add(function(){},$name);
       This will add a public function in Foo Class.
       */


    public function findByClass($class_name, $tag_name)
    {
        $classes = explode(' ', $class_name);

        $this->tag_name = $tag_name;

        $this->nodes = $this->load->query("//*[contains(@class, '$classes[0]')]");

//        for ($i=1;$i<sizeof($classes);$i++){
//            $this->nodes = $this->nodes->query("//*[contains(@class, '$classes[$i]')]");
//
//        }
        return $this;


        $ul = $nodes[0]->getElementsByTagName('li');
        foreach ($ul as $li) {

            $aa = $li->getElementsByTagName('a');

            $a['ul'][] = $aa[0]->nodeValue;

        }


        return $a;


    }

    public function findById($id)
    {


        $this->nodes = $this->load->query("//*[contains(@id, '$id')]");
        return $this;


    }

    public function findByTag($tag_name)
    {

        $this->nodes = $this->load->getElementsByTagName('li');
        return $this;


    }

    public function addToJson($tag)
    {
        $tags = explode(' ', $tag);

        foreach ($this->nodes[0]->getElementsByTagName($tags[0]) as $value) {


            if (sizeof($tags) > 1) {
                for ($i = 1; $i < sizeof($tags); $i++) {

                    $value = $value->getElementsByTagName($tags[$i]);

                }
                $temp[] = $value[0]->nodeValue;

            } else {
                $temp[] = $value->nodeValue;


            }

        }

        $this->json[][$this->tag_name] = $temp;

        return $this;
    }

    public function getJson()
    {
        return $this->json;

    }

    public function first()
    {
        return $this->nodes[0];
    }

    public function get()
    {
        return $this->nodes;
    }


    public function load()
    {
        $this->dom = new DOMDocument;
        libxml_use_internal_errors(true);
        $this->dom->loadHTML($this->contents);
//        dd($dom);
        $this->load = new DomXPath($this->dom);

        return $this;
    }


    public function get_html($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/6.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.A.B.C Safari/525.13");
        $html = curl_exec($ch);
        curl_close($ch);

        $this->contents = $html;

        return $this;

    }
}


class url extends HtmlParser
{


    public function __construct($url)
    {

        $this->url = $url;
        $this->get_html($url)
            ->remove_noise("\n")
            ->remove_noise("\t")
            ->load();


    }
}

class path extends HtmlParser
{
    public function __construct($path)
    {

        $this->path = $path;
    }
}

class html extends HtmlParser
{
    public function __construct($html)
    {

        $this->html = $html;
    }
}
