<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
            class Stack
            {
                private $tmp;
                private $no=0;
                public function push($i)
                {
                    $this->tmp[] = $i;
                    $this->no++;
                }
                public function pop()
                {
                    return $this->tmp[--$this->no];
                }
            }
            
            class Data
            {
                public $i;
                public $j;
            }
            
            $s = new Stack();
            
            $data = new Data();
            $data->i="aiueo";
            $data->j=1;
            
            $s->push($data);
            
            $ret = $s->pop();
            echo $ret->i;
            
        ?>
    </body>
</html>
