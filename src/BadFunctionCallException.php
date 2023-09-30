<?php

namespace SFW;

class BadFunctionCallException extends \BadFunctionCallException implements Exception
{
    use ExceptionTrait;
}
