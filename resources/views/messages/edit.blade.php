<x-layout title='message'>

    <div class="p-4">

        <x-link href="/jobs">back to messages</x-link>

        <x-message.edit :message="$message"></x-message.edit>
        
    </div>

    <x-banner>I'm a banner</x-banner>
        
</x-layout>   