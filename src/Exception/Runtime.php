<?php

namespace SFW\Exception;

class Runtime extends \RuntimeException implements \SFW\Exception
{
    use SettersTrait;
}
