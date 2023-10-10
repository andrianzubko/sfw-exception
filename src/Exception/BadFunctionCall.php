<?php

namespace SFW\Exception;

class BadFunctionCall extends \BadFunctionCallException implements \SFW\Exception
{
    use SettersTrait;
}
