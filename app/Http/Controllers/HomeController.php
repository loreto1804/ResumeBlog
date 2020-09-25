<?php

namespace App\Http\Controllers;

use App\Newsletter;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   // [HttpGet, route('index')]
   public function index()
   {
      return view('home.index');
   }

   // [HttpPost, route('newsletter.subscribe')]
   public function subscribeToNewsletter(Request $request)
   {
      try {
         $email = $request->input('email');

         if (isset($email)) {
            Newsletter::create([
               'email' => $email
            ]);

            return ['Success' => 'Thank you for subscribing.'];
         }
      } catch (QueryException $qex) {
         return ['Error' => $qex->getMessage()];
      } catch (Exception $ex) {
         return ['Error' => $ex->getMessage()];
      }

      return ['Error' => 'Email parameter is missing.'];
   }
}
