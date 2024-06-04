<x-layout title='messages'>


    <div class="h-40 p-3 w-full flex justify-center items-center text-3xl" style="background: url('img/gradient.jpg')">
    
        <x-heading class="text-white">Messages</x-heading>
    
    </div>

    <div class="p-4 container mx-auto">

        <div class="flex w-full justify-between">

            <x-back></x-back>

            <x-btn-link class="bg-blue-500" href="messages/create">Add Message</x-btn-link>

        </div>
       
        <ul class="flex flex-col gap-2 text-lg w-full">

            @foreach( $messages as $message )

                <x-message.index :message="$message"></x-message.index>
        
            @endforeach

        </ul>

    </div>

    <x-banner>I'm a banner</x-banner>
        
</x-layout>   