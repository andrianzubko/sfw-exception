<?php

namespace SFW\Exception;

class InvalidArgument extends \InvalidArgumentException implements \SFW\Exception
{
    use SettersTrait;
}
