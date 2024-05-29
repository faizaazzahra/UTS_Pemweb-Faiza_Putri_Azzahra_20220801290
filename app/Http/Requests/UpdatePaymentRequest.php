<?php

namespace App\Http\Requests;

use App\Models\Payment;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePaymentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('payment_edit');
    }

    public function rules()
    {
        return [
            'date' => [
                'required',
            ],
            'name' => [
                'string',
                'required',
            ],
            'product' => [
                'string',
                'nullable',
            ],
            'price' => [
                'required',
            ],
            'total_price' => [
                'integer',
                'required',
            ],
        ];
    }
}
