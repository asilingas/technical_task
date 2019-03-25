<?php
/**
 * Created by PhpStorm.
 * User: new
 * Date: 2019.03.24
 * Time: 08:54
 */

namespace AppBundle\Command;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ReportHandlerCommand extends Command
{
    private $reportGenerators;

    public function addReportGenerator($reportGenerator, $alias)
    {
        $this->reportGenerators[$alias] = $reportGenerator;
    }

    protected function configure()
    {
        $this->setName('report:handler');
        $this->setDescription('Calls a report generator');
        $this->addArgument('report_generator_name', InputArgument::REQUIRED);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $report_name = $input->getArgument('report_generator_name');

        if (array_key_exists($report_name, $this->reportGenerators)) {
            $output->write($this->reportGenerators[$report_name]->generate());
        } else {
            $output->write('There isn\'t a defined report generator called: '.$report_name);
        }
    }
}