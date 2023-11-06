<?php
declare(strict_types=1);

namespace SFW\Exception;

class Runtime extends \RuntimeException implements \SFW\Exception
{
    use SettersTrait;
}
