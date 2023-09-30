<?php

namespace SFW;

class BadMethodCallException extends \BadMethodCallException implements Exception
{
    use ExceptionTrait;
}
