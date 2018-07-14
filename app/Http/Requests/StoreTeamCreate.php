<?php

namespace App\Http\Requests;

use App\Rules\InOneTeam;
use App\Rules\IsTeacher;
use Illuminate\Foundation\Http\FormRequest;

class StoreTeamCreate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'userid_1' => ['required', 'exists:users,userid', 'max:12', 'alpha_num', 'different:userid_3',
                'different:userid_4', 'different:userid_5', 'different:userid_2', new InOneTeam()],
            'userid_2' => ['required', 'exists:users,userid', 'max:12', 'alpha_num', new IsTeacher()],
            'userid_3' => ['required', 'exists:users,userid', 'max:12', 'alpha_num', 'different:userid_1',
                'different:userid_4', 'different:userid_5', new InOneTeam()],
            'userid_4' => ['required', 'exists:users,userid', 'max:12', 'alpha_num', 'different:userid_3',
                'different:userid_1', 'different:userid_5', new InOneTeam()],
            'userid_5' => ['required', 'exists:users,userid', 'max:12', 'alpha_num', 'different:userid_3',
                'different:userid_4', 'different:userid_1', new InOneTeam()],
        ];
    }


}
