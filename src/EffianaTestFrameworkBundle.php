<?php

namespace Effiana\TestFrameworkBundle;

use Effiana\TestFrameworkBundle\DependencyInjection\Compiler\CheckReferenceCompilerPass;
use Effiana\TestFrameworkBundle\DependencyInjection\Compiler\ClientCompilerPass;
use Effiana\TestFrameworkBundle\DependencyInjection\Compiler\TagsInformationPass;
use Effiana\TestFrameworkBundle\DependencyInjection\Compiler\TestSessionListenerCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class EffianaTestFrameworkBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new TagsInformationPass());
        $container->addCompilerPass(new CheckReferenceCompilerPass());
        $container->addCompilerPass(new ClientCompilerPass());
        $container->addCompilerPass(new TestSessionListenerCompilerPass());
    }
}
