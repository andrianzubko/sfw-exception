<?php

namespace SFW;

class UnexpectedValueException extends \UnexpectedValueException implements Exception
{
    use ExceptionTrait;
}
