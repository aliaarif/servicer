<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\State;
use App\Models\City;

class AxiosController extends Controller
{
	public function getRespectiveStates(Request $request)
	{
		$states = State::where('country_id',$request->country_id)->get();
		return view('ajax.show-requested-states', ['states' => $states]);
	}

	public function getRespectiveCities(Request $request)
	{
		$cities = City::where('state_id',$request->state_id)->get();
		return view('ajax.show-requested-cities', ['cities' => $cities]);
	}

}
