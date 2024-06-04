@props(['vacancy'])

<form action="/jobs/edit/{{ $vacancy->id }}" method="POST" class="flex flex-col gap-2 justify-center items-start">
    @csrf
    @method('PATCH')
    <x-input id='title' value="{{ $vacancy->title }}"></x-input>
    <x-input id='description' value="{{ $vacancy->description }}"></x-input>
    <x-input id='company' value="{{ $vacancy->company }}"></x-input>
    <x-input id='location' value="{{ $vacancy->location }}"></x-input>
    <x-input id='salary' value="{{ $vacancy->salary }}"></x-input>
    <x-input id='expiry_date' type='date' value="{{ $vacancy->expiry_date }}"></x-input>
    <x-btn type="submit" class="bg-emerald-500">Update</x-btn>
</form>