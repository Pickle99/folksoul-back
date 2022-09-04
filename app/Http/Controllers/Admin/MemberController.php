<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Member\StoreMemberRequest;
use App\Models\Member;
use Illuminate\Http\JsonResponse;

class MemberController extends Controller
{
	public function store(StoreMemberRequest $request): JsonResponse
	{
		Member::create([
			'name'        => $request->name,
			'instrument'  => $request->instrument,
			'orbit_width' => $request->orbit_width,
			'color'       => $request->color,
			'biography'   => $request->biography,
		]);
		return response()->json('Member successfully created', 200);
	}
}
