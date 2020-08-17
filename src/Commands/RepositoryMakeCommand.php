<?php


namespace Jianzi\Repository\Commands;


use Symfony\Component\Console\Input\InputArgument;

class RepositoryMakeCommand extends BaseCommand
{
    protected $signature = 'make:repository {--name=} {--model=}';

    protected $description = '生成仓库类
     {--name=}  设置仓库名 [ --name=User ]
     {--model=} 生成模型 [ --model=Models/User ]';

    protected $type = 'Repository';

    protected function getStub()
    {
        return __DIR__ . '/stubs/repository.stub';
    }

    public function handle()
    {
        parent::handle();

        if ($this->option('all')) {
            $this->createModel();
        }
    }

    protected function createModel()
    {
        $modelName = $this->qualifyClass($this->getNameInput());

        $this->call('make:model', [
            'name' => $modelName,
            '--all' => true,
        ]);
    }

    protected function getArguments()
    {
        return [
            ['name', InputArgument::REQUIRED, '仓库名称'],
        ];
    }
}
