<?php


namespace Jianzi\Repository\Commands;


use Illuminate\Console\GeneratorCommand;

abstract class BaseCommand extends GeneratorCommand
{
    /**
     * 配置模板文件路径.
     *
     * @return string
     */
    abstract protected function getStub();


}
