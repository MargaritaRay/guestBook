<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 003 03.06.18
 * Time: 13:48
 */

class TextFile
{
    protected $data;

    public function __construct($way)
    {
        $this->way = $way;

        $array = include $way;

        foreach ($array as $value) {
            $this->data[] = $value;
        }
    }

    public function getData()
    {
        return $this->data;
    }

}


