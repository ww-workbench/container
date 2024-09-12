<?php
declare(strict_types=1);

namespace WebWizardry\Di;

use Psr\Container\ContainerInterface;

class ContainerBuilder extends \DI\ContainerBuilder implements ContainerBuilderInterface
{
    public function __construct(string $containerClass = Container::class)
    {
        parent::__construct($containerClass);
    }

    public function build(): ContainerInterface
    {
        $container = parent::build();
        $container->set(ContainerInterface::class, $container);
        return $container;
    }
}