<?php

declare(strict_types=1);

namespace SFW;

interface Exception extends \Throwable
{
    /**
     * Sets the file in which the exception occurred.
     */
    public function setFile(string $file): self;

    /**
     * Sets the line in which the exception occurred.
     */
    public function setLine(int $line): self;
}
