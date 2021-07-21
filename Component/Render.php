<?php


namespace Component;


class Render
{
    protected $vars = [];

    function add_vars(array $vars = []) {
        $this->vars = $vars;
    }

    function render(string $file) {
        if(!preg_match("/^[a-zA-Z_0-9.]+$/i", $file)) {
            die("Недопустимые символы в названии файла");
        }

        if(file_exists('Template/'.$file.'.tpl.php')) {
            ob_start();
            extract($this->vars);
            require ("Template/".$file.'.tpl.php');
            return ob_get_clean();
        } else die("Файл не найден.");
    }
}