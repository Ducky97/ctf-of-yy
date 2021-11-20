<?php

namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        //return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) </h1><p> ThinkPHP V6<br/><span style="font-size:30px">13载初心不改 - 你值得信赖的PHP框架</span></p></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=64890268" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="eab4b9f840753f8e7"></think>';
        if (isset($_GET['file'])) {
            $file = $_GET['file'];
            $file = trim($file);
            $file = preg_replace('/\s+/','',$file);
            if(preg_match("/flag/i",$file)){ die('<h2> no flag..');}
            if(file_exists($file)){
                echo "file_exists() return true..</br>";
                die( "hacker!!!");
            }else {
                echo "file_exists() return false..";
                @highlight_file($file);
            }

        } else {

            echo "Error! no file parameter <br/>";
            echo "highlight_file Error";
        }

    }

    public function unser(){
        if(isset($_GET['vulvul'])){
            $ser = $_GET['vulvul'];
            $vul = parse_url($_SERVER['REQUEST_URI']);
            parse_str($vul['query'],$query);

            foreach($query as $value)
            {
                if(preg_match("/O/i",$value))
                {
                    die('</br> <h1>Hacking?');
                    exit();
                }
            }
            unserialize($ser);
        }

    }
}



