<?php
declare(strict_types=1);

namespace WebWizardry\Di;
use Psr\Container\ContainerInterface;

interface ContainerBuilderInterface
{
    /**
     * @param class-string<ContainerInterface> $containerClass
     */
    public function __construct(string $containerClass = Container::class);
}