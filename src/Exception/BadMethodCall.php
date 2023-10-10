<?php

namespace SFW\Exception;

class BadMethodCall extends \BadMethodCallException implements \SFW\Exception
{
    use SettersTrait;
}
