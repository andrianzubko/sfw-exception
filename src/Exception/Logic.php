<?php

declare(strict_types=1);

namespace SFW\Exception;

class Logic extends \LogicException implements \SFW\Exception
{
    use SettersTrait;
}
