<?php

namespace SymfonyTasks\Routing\Common;

use SymfonyTasks\Routing\Tasks\TaskExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class TaskBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new TaskExtension();
    }
}
