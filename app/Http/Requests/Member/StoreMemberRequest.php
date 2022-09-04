<?php

namespace App\Http\Requests\Member;

use Illuminate\Foundation\Http\FormRequest;

class StoreMemberRequest extends FormRequest
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
	 * @return array<string, mixed>
	 */
	public function rules()
	{
		return [
			'name'        => 'required|min:3|regex:/^[ა-ჰ]+$/',
			'instrument'  => 'required|min:2|regex:/^[ა-ჰ]+$/',
			'orbit_width' => 'required|integer',
			'color'       => 'required|digits:7|starts_with:#',
			'biography'   => 'required|regex:/^[ა-ჰ]+$/',
		];
	}
}
