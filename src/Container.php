<?php
declare(strict_types=1);

namespace WebWizardry\Di;

use Psr\Http\Message\RequestInterface;
use WebWizardry\Config\Definition\Definitions\Reference;

class Container extends \DI\Container
{
    public function get(string $id): object
    {
        $o = parent::get($id);
        if ($o instanceof Reference) {
            return $o->resolve($this);
        }
        return $o;
    }
}