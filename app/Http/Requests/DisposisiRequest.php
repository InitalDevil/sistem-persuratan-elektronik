<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DisposisiRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        switch ($this->method()) {
            case 'POST':
                return [
                    'kepada' => 'required|string',
                    'keterangan' => 'required|string',
                    'status' => 'required|numeric',
                    'tanggapan' => 'required|string'
                ];
                break;
            case 'PUT':
                return [
                    'kepada' => 'sometimes|required|string',
                    'keterangan' => 'sometimes|required|string',
                    'status' => 'sometimes|required|numeric',
                    'tanggapan' => 'sometimes|required|string'
                ];
                break;
            default:
                break;
        }
    }
}
