<?php
/**
 * Created by PhpStorm.
 * User: new
 * Date: 2019.03.24
 * Time: 09:50
 */

namespace AppBundle\DependencyInjection\Compiler;


use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class ReportGeneratorCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        /*TODO
         $definition = $container->getDefinition('');*/
        $taggedServices = $container->findTaggedServiceIds('report_generator');
        $references = [];
        foreach ($taggedServices as $id => $tags) {
            $references[] = new Reference($id);
        }
        //$definition->setArgument(0, $references);
    }
}