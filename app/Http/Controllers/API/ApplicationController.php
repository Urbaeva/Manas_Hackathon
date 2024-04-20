<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Jobs\SendNotificationJob;
use App\Models\Application;
use App\Models\Notification;
use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::all();
        return view('application.index', compact('applications'));
    }

    public function show(Application $application)
    {
        return view('application.show', compact('application'));
    }

    public function completeDoc(Upload $upload)
    {
        $upload->update(['status' => 2]);
        $user = $upload->user;
        $document_name = $upload->document->name;
        $documents = $user->documents;
        $is_all = True;
        foreach ($documents as $document) {
            if($document->status != 3 && $document->status != 1)
            {
                $is_all = False;
            }
        }

        $message = "Сиз жүктөгөн $document_name жарактуу деп табылды \n";
        if($is_all)
        {
            $message .= "Куттуктайбыз сиз баардык документтерди туура чогулттуңуз";
        }
        $notification = Notification::create([
            'user_id' => $user->id,
            'message' => $message
        ]);
        SendNotificationJob::dispatch($user, $notification);
        return back();
    }
    public function rejectDoc(Upload $upload)
    {
        $user = $upload->user;
        $upload->update(['status' => 3]);
        $document_name = $upload->document->name;
        $notification = Notification::create([
            'user_id' => $user->id,
            'message' => "Сиз жүктөгөн $document_name жараксыз деп табылды \n Сураныч керектүү документти тиешелүү түрдө жибериңиз"
        ]);
        SendNotificationJob::dispatch($user, $notification);
        return back();
    }

    public function completeAll(Application $application)
    {
        $uploads = $application->user->documents;
        foreach ($uploads as $upload) {
            $upload->update(['status' => 2]);
        }
        $user = $application->user;
        $notification = Notification::create([
            'user_id' => $user->id,
            'message' => "Куттуктайбыз сиз баардык документтерди туура чогулттуңуз"
        ]);
        SendNotificationJob::dispatch($user, $notification);
        return back();
    }
}
