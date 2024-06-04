<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;
use App\Models\Message;

class MessageController extends Controller
{
 
    public function index()
    {
        $messages = Message::all()->sortByDesc('id');
        return view('messages.index',[
            'messages' => $messages
        ]);
    }

 
    public function create()
    {
        return view('messages.create');

    }

  
    public function store(StoreMessageRequest $request)
    {
        
        $messages = Message::create(
            [
                'title' => $request->title,
                'salary' => $request->salary,
                'company' => $request->company,
                'location' => $request->location,
                'message' => $request->message,
            ]
        );

        $messages->save();

        return redirect('messages/')->with([ 'id' => $request->id, 'title' => $request->title, 'flash' => 'create' , 'color' => 'bg-blue-500' , 'flash-message' => "$request->title message added" ]);
    }

 
    public function show(Message $message)
    {
        return view('messages.show',[
            'message' => $message
        ]);
    }

 
    public function edit(Message $message)
    {
        return view('messages.edit',[
            'message' => $message
        ]);
    }

   
    public function update(UpdateMessageRequest $request, Message $message)
    {
        Message::find($message->id)->update([
            'title' => $request->title,
            'salary' => $request->salary,
            'company' => $request->company,
            'location' => $request->location,
            'message' => $request->message,
    ]);
        
        return redirect("messages/$message->id")->with([ 'id' => $request->id, 'title' => $request->title, 'flash' => 'create' , 'color' => 'bg-blue-500' , 'flash-message' => "$request->title message updated" ]);
    }

   
    public function destroy(Message $message)
    {
        $vacancy = Message::find($message->id);
 
        $vacancy->delete();

        return redirect('/jobs')->with([ 'id' => $message->id, 'title' => $message->title, 'flash' => 'delete' , 'color' => 'bg-red-500' , 'flash-message' => "$message->title job removed" ]);
    }

}
