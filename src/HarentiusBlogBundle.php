<?php

namespace Harentius\BlogBundle;

use Harentius\BlogBundle\DependencyInjection\CompilerPass\LocalesConfigPass;
use Harentius\BlogBundle\DependencyInjection\CompilerPass\SetTwigVariablesPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class HarentiusBlogBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container
            ->addCompilerPass(new SetTwigVariablesPass())
            ->addCompilerPass(new LocalesConfigPass())
        ;
    }
}
