<?php

namespace Ethereal\Foundation;

class Application
{
    protected $basePath;

    public function __construct(string $basePath)
    {
        $this->useBasePath($basePath);
    }

    public function useBasePath(string $basePath)
    {
        $this->basePath = $basePath;
    }

    public function basePath(string $path = '')
    {
        return $this->basePath . ($path ? DIRECTORY_SEPARATOR . $path : $path);
    }
}

