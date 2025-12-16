<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class WordsCount implements ValidationRule
{
    public function __construct(public $len = 10)
    {

    }
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if(str_word_count($value) < $this->len) {
            $fail("The $attribute must be greater than " . $this->len);
        }
    }
}
