<?php

declare(strict_types=1);

namespace SFC\Staticfilecache\Command;

use Symfony\Component\Console\Command\Command;

/**
 * AbstractCommand.
 */
abstract class AbstractCommand extends Command
{
    /**
     * Set generic prefix for the description.
     *
     * @param string $description
     *
     * @return Command
     */
    public function setDescription($description): static
    {
        return parent::setDescription('StaticFileCache task: '.$description);
    }
}
