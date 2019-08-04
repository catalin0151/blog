<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsers extends FormRequest
{
    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'email' => 'required|email',
            'name' => 'required',
            'password' => 'required',
            'confirm_password' => 'required'
        ];
    }
}