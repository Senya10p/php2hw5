<?php

namespace App\Models;

class Logger
{
    protected $path;

    protected $data = [];

    public function __construct($path, $text)
    {
        $this->path = $path;
        $this->data = file($this->path, FILE_IGNORE_NEW_LINES);
        if (is_array($text)) {
            $text = implode('//', $text);
        }
        $this->data[] = $text;
    }

    public function all()
    {
        return $this->data;
    }

    public function save($uri, $action)
    {
        $log = implode(PHP_EOL, $this->data);
        $log = $log . ' ||url: ' . $uri  . ' ||action: ' . $action . ' ||time: ' . date('Y-m-d H:i:s');

        file_put_contents($this->path, $log);
    }
}