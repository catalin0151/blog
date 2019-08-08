<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Request;

class StoreUsers extends FormRequest
{
    public function authorize() {
        return true;
    }

    public function rules() {
        $method = $this->method();
        $id = $this->route('id');
        switch ($method) {
            case 'POST':
                return [
                    'email' => 'required|email|unique:users',
                    'name' => 'required',
                    'password' => 'required|confirmed',
                ];
            case 'PUT':
                return [
                    'email' => 'required|email|unique:users,email' . $id,
                    'name' => 'required',
                ];
        };

        return [];
    }
}
