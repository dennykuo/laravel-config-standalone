<?php

namespace Dennykuo\Config;

class Config extends Singletonable
{
    private $repository;

    protected function configure($instance, $configPath)
    {
        $this->repository = new ConfigBag([], $configPath);
    }

    public function __call($name, $arguments)
    {
        return call_user_func_array([$this->repository, $name], $arguments);
    }
}
