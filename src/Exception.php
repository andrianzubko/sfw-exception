<?php

namespace SFW;

class Exception extends \Exception
{
    /**
     * Sets the file in which the exception occurred.
     */
    public function setFile(string $file): self
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Sets the line in which the exception occurred.
     */
    public function setLine(int $line): self
    {
        $this->line = $line;

        return $this;
    }
}
