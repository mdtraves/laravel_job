@props(['message'])

<form action="/messages/edit/{{ $message->id }}" method="POST" class="flex flex-col gap-2 justify-center items-start">
    @csrf
    @method('PATCH')
    <x-input id='title' value="{{ $message->title }}"></x-input>
    <x-input id='message' value="{{ $message->message }}"></x-input>
    <x-input id='company' value="{{ $message->company }}"></x-input>
    <x-input id='location' value="{{ $message->location }}"></x-input>
    <x-input id='salary' value="{{ $message->salary }}"></x-input>
    <x-btn type="submit" class="bg-emerald-500">Update</x-btn>
</form>