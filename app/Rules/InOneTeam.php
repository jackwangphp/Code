<?php

namespace App\Rules;

use App\Team;
use Illuminate\Contracts\Validation\Rule;

class InOneTeam implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return !Team::where([
            ['userid','=',$value],
            ['year','=',date('Y')]
        ])->exists();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return '该用户已经加入了其他团队';
    }
}
