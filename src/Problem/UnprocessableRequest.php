<?php
declare(strict_types=1);

namespace Lcobucci\ErrorHandling\Problem;

use Throwable;

interface UnprocessableRequest extends Throwable
{
}