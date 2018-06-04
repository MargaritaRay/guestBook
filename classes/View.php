<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 003 03.06.18
 * Time: 12:43
 */

class View
{
    protected $data = [];

    public function __construct()
    {
        #не имеет аргументов
    }

    public function assign($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function display($template)
    {
        $templateFile = __DIR__ . "\\..\\template\\" .  $template;
        include $templateFile;
    }

    public function render($template)
    {
        $templateFile = __DIR__ . "\\..\\template\\" .  $template;

        $data = $this->data;

        ob_start();
        include $templateFile;
        return ob_get_clean();
    }
}