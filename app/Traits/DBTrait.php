<?php

namespace App\Traits;

use App\Registration;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\SendMail;

trait DBTrait
{
  public function newUser($req)
  {

    try {
      // adding validated data to database
      $userDetails = Registration::create($req->all());
      // Sending a Welcome Mail with a log
      Mail::to($req->email)->send(new SendMail($userDetails));
      Log::info('Email Sent');
      // retuning the userDetails for further reuse
      return $userDetails;
    } catch (\Swift_TransportException $transportExp) {
      // logging the error occurred due to mail
      $mailErr = $transportExp->getMessage();
      Log::info('Email not Send');
      Log::info($mailErr);
    }
  }
}
