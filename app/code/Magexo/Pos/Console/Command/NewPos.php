<?php


namespace Magexo\Pos\Console\Command;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class NewPos extends Command
{
    const NAME = 'name';
    const ADDRESS = 'address';
    const AVAILABLE = 'available';

    protected function configure()
    {
        $this->setName('magexo:pos:add');
        $this->setDescription("Add new POS.");
        $this->addOption(
            self::NAME,
            null,
            InputOption::VALUE_REQUIRED,
            'Name of POS'
        );
        $this->addOption(
            self::ADDRESS,
            null,
            InputOption::VALUE_REQUIRED,
            'Address of POS'
        );
        $this->addOption(
            self::AVAILABLE,
            null,
            InputOption::VALUE_REQUIRED,
            'Availability of POS'
        );

        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

    }
}
