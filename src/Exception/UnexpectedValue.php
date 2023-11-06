<?php
declare(strict_types=1);

namespace SFW\Exception;

class UnexpectedValue extends \UnexpectedValueException implements \SFW\Exception
{
    use SettersTrait;
}
