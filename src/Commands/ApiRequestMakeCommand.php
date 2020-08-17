<?php


namespace Jianzi\Repository\Commands;


use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputArgument;

class ApiRequestMakeCommand extends GeneratorCommand
{
    protected $signature = 'make:apiRequest {name}';
    protected $description = '生成API请求类';
    protected $type = "Request";

    protected function getStub()
    {
        return __DIR__ . '/stubs/request.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Http\Requests';
    }

    protected function getArguments()
    {
        return [
            ['name', InputArgument::REQUIRED, '请求类名']
        ];
    }
}
