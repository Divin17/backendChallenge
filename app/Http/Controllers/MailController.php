<?php

namespace App\Http\Controllers;

use App\Models\LaboratoryTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    /**
     * Send the email.
     *
     * @param object  $request
     * @return string $sent
     */
    public static function send($request)
    {
        $tests = LaboratoryTest::whereIn('id', $request->tests)->get()->toArray();
        $data = [
            'ct_scan' => $request->ct_scan,
            'mri' => $request->mri,
            'tests' => $tests,
        ];
        try {
            Mail::send('mail', $data, function ($message) {
                $message->to('peopleoperations@kompletecare.com', 'peopleoperations')->subject(auth()->user()->name . ' medical data');
                $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
                echo "- Email Sent!!";
            });
            return " - Email Sent Successfully!!";
        } catch (\Throwable $th) {
            return " - Email Not Sent!!";
        }
    }
}
