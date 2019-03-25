<?php
/**
 * Created by PhpStorm.
 * User: new
 * Date: 2019.03.24
 * Time: 09:50
 */

namespace AppBundle\DependencyInjection\Compiler;


use AppBundle\Command\ReportHandlerCommand;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class ReportGeneratorCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        $definition = $container->getDefinition(ReportHandlerCommand::class);

        $taggedServices = $container->findTaggedServiceIds('report_generator');
        foreach ($taggedServices as $id => $tags) {

            //Antras ciklas isskirti to paties tago servisams
            foreach ($tags as $attributes) {

                //Perduodam servisus i handleri
                $definition->addMethodCall('addReportGenerator', [
                    new Reference($id),
                    $attributes['alias']
                ]);

            }

        }
    }
}