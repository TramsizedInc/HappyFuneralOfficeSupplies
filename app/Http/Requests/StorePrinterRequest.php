<?php

namespace App\Http\Requests;

use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Http\FormRequest;

class StorePrinterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $user = Auth::user();
        $slug = DB::table('roles')
            ->select('slug')
            ->where('id', $user->role_id)
            ->value('slug');
        if($slug == '' || $slug == 'Shit_manager')
        {
            toastr()->error('Megtagadva! Indok: nem megfelelő jogosultság');
            return false;
        }
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
        ];
    }
}
