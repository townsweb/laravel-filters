<?php

namespace Abstractrs\Form\Request\Filters;

use Abstractrs\Form\Request\Filters\Contracts\Filter;
use Illuminate\Support\Facades\Crypt;

class EncryptFilter implements Filter
{
    public function filter($value)
    {
        return Crypt::encrypt($value);
    }
}
