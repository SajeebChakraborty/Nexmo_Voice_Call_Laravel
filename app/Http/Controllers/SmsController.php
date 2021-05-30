<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo;

class SmsController extends Controller
{
    public function send_message()
	{

		Nexmo::calls()->create([
		'to' => [[
			'type' => 'phone',
			'number' => '14155550100'
		]],
		'from' => [
			'type' => 'phone',
			'number' => '14155550101'
		],
		'answer_url' => ['https://example.com/webhook/answer'],
		'event_url' => ['https://example.com/webhook/event']
		]);


		return "Voice Call send successfully";


	}
}
