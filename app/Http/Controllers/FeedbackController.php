<?php

namespace App\Http\Controllers;

use App\Feedback;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FeedbackController extends Controller
{
    // [HttpGet, route('feedback.index')]
    public function index()
    {
        return view('feedback.index');
    }

    // [HttpPost, route('feedback.send')]
    public function send(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|max:64',
                'email' => 'required|max:128',
                'message' => 'required|max:2048'
            ]);

            if ($validator->fails()) {
                return ['Error' => $validator->errors()];
            }

            Feedback::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'message' => $request->input('message')
            ]);

            return ['Success' => 'Your feedback has been recieved!'];
        } catch (QueryException $qex) {
            return ['Error' => $qex->getMessage()];
        } catch (Exception $ex) {
            return ['Error' => $ex->getMessage()];
        }
    }
}
