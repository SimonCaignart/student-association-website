<?php

namespace App\Http\Controllers;
Use Mail;

use Illuminate\Http\Request;

class MailsController extends Controller
{

    public function alertemail(Request $request)
    {
        $title = $request->title;
        $content = $request->content;
        $user_email = "simon.caignart@viacesi.fr";
        $user_name = "BDE";

        try
        {
            $data = ['email'=> $user_email,'name'=> $user_name,'subject' => $title, 'content' => $content];
            Mail::send('Mails/AlertAdmins', $data, function($message) use($data)
            {
                $subject=$data['subject'];
                $text=$data['content'];
                $message->from('simon.caignart@gmail.com');
                $message->to($data['email'], 'BDE.CESI')->subject($subject);   
            });
            return redirect('/administrations')->with('success', 'Mail envoyé');
        }
        catch (\Exception $e)
        {
            dd($e->getMessage());
        }
    }



    public function sendemail()
    {
        $title = "Boutique du BDE";
        $content = "simon.caignart@gmail.com";
        $user_email = "simon.caignart@viacesi.fr";
        $user_name = "BDE";
        
        try
        {
            $data = ['email'=> $user_email,'name'=> $user_name,'subject' => $title, 'content' => $content];
            Mail::send('Mails/ProductPurchased', $data, function($message) use($data)
            {
                $subject=$data['subject'];
                $message->from('simon.caignart@gmail.com');
                $message->to($data['email'], 'BDE.CESI')->subject($subject);   
            });
             return redirect('/products');
        }
        catch (\Exception $e)
        {
            dd($e->getMessage());
        }

    }
 
}
