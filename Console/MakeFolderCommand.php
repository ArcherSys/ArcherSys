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
        if ($input->getOption('xml')) {
            $input->setOption('format', 'xml');
        }
}

private function createDefinition()
    {
        return new InputDefinition(array(
            new InputArgument('namespace', InputArgument::OPTIONAL, 'The namespace name'),
            new InputOption('xml', null, InputOption::VALUE_NONE, 'To output list as XML'),
            new InputOption('raw', null, InputOption::VALUE_NONE, 'To output raw command list'),
            new InputOption('format', null, InputOption::VALUE_REQUIRED, 'To output list in other formats', 'txt'),
        ));
    }


}