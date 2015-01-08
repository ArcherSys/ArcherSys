<?php
namespace ArcherSys\Shell;
require $_SERVER["DOCUMENT_ROOT"].'vendor/autoload.php';
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Descriptor\TextDescriptor;
use Symfony\Component\Console\Descriptor\XmlDescriptor;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Helper\HelperSet;


 class MakeFolderCommand extends Command{
      protected function configure(){
           $this->setName('makedir')
            ->setDefinition($this->createDefinition())
            ->setDescription('Creates a directory');
}
 protected function execute(InputInterface $input, OutputInterface $output)
    {
        if($input->getOption("name")){
       mkdir($input->getOption("name"));
}
}

private function createDefinition()
    {
        return new InputDefinition(array(
            new InputArgument('namespace', InputArgument::OPTIONAL, 'The namespace name'),
            new InputOption('name', null, InputOption::VALUE_REQUIRED, 'The name of your folder'),
        ));
    }


}