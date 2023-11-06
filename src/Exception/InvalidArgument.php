<?php

declare(strict_types=1);

namespace SFW\Exception;

class InvalidArgument extends \InvalidArgumentException implements \SFW\Exception
{
    use SettersTrait;
}
