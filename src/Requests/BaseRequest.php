<?php

namespace Jianzi\Repository\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class BaseRequest extends FormRequest
{
    /**
     * 参数错误
     */
    const _PARAMS_ERROR_ = 422;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    protected function failedValidation(Validator $validator)
    {
        throw (new HttpResponseException(response()->json([
            'code' => $this->getFaiedValidationCode(),
            'msg' => $validator->errors()->first()
        ], 200)));
    }

    protected function getFaiedValidationCode()
    {
        return self::_PARAMS_ERROR_;
    }
}
