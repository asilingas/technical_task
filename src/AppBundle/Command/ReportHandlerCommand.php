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
    protected function configure()
    {
        $this->setName('report:handler');
        $this->setDescription('Calls a report generator');
        $this->addArgument('report_generator_name', InputArgument::REQUIRED);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $report_name = $input->getArgument('report_generator_name');

        if ($report_name == "user_activity") {

//            TODO

            $output->write('');
        } elseif ($report_name == "user_payments") {

//            TODO

            $output->write('');
        }
    }
}