<x-layout title='jobs'>

    <div class="p-4">

        <x-heading>Messages</x-heading>

        <ul class="flex flex-col gap-2 text-lg p-2 w-full">

            @foreach( $messages as $message )

                <x-message.list :message="$message"></x-message.list>
        
            @endforeach

        </ul>

    </div>

    <x-banner>I'm a banner</x-banner>
        
</x-layout>   