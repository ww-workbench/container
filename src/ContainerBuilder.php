<?php
declare(strict_types=1);

namespace WebWizardry\Di;

class ContainerBuilder extends \DI\ContainerBuilder implements ContainerBuilderInterface
{
    public function __construct(string $containerClass = Container::class)
    {
        parent::__construct($containerClass);
    }
}