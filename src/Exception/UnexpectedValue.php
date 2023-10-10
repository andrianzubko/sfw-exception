<?php

namespace SFW\Exception;

class UnexpectedValue extends \UnexpectedValueException implements \SFW\Exception
{
    use SettersTrait;
}
