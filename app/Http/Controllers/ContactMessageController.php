<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Mail\ContactMailNotify;
use Mail;
use Redirect;
use Session;

class ContactMessageController extends Controller
{
    function addNewContactMessageFromClient(Request $contact_message_details) {
        $data = [
            'subject'=>'Regarding Your Message',
            'body'=>'Thank you for Providing a Message we will contact you as soon as possible.'
        ];
        $contact_message_table = new ContactMessage();

        if ($contact_message_details->name != null && $contact_message_details->email != null && $contact_message_details->phone != null && $contact_message_details->subject != null && $contact_message_details->message != null) {
            $contact_message_table->name = $contact_message_details->name;
            $contact_message_table->email = $contact_message_details->email;
            $contact_message_table->mobile = $contact_message_details->phone;
            $contact_message_table->subject = $contact_message_details->subject;
            $contact_message_table->message = $contact_message_details->message;

            $contact_message_table->save();
            Mail::to($contact_message_details->email)->send(new ContactMailNotify($data));
            Session()->flash('status', 'Operation Complete.');
            return Redirect::back();
        } else {
            Session()->flash('status', 'Please Fill All Feilds.');
            return Redirect::back();
        }
    }   
}
