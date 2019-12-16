<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuratMasukRequest extends FormRequest
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
                    'user_id' => 'required|numeric',
                    'jenis_surat' => 'required|numeric',
                    'no_surat' => 'required|string',
                    'pengirim' => 'required|string',
                    'perihal' => 'required|string',
                ];
                break;
            case 'PUT':
                return [
                    'user_id' => 'sometimes|required|numeric',
                    'jenis_surat' => 'sometimes|required|numeric',
                    'no_surat' => 'sometimes|required|string',
                    'pengirim' => 'sometimes|required|string',
                    'perihal' => 'sometimes|required|string',
                ];
                break;
            default:
                break;
        }
    }
}
