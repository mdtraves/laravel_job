<x-layout title='jobs'>

    <div class="p-4 container mx-auto">

        <form action="/jobs/create" method="POST" class="flex flex-col gap-2 justify-center items-start">
            @csrf
            <x-vacancy.input id='title'></x-vacancy.input>
            <x-vacancy.input id='description'></x-vacancy.input>
            <x-vacancy.input id='company'></x-vacancy.input>
            <x-vacancy.input id='location'></x-vacancy.input>
            <x-vacancy.input id='salary'></x-vacancy.input>
            <x-vacancy.input id='expiry_date' type='date'></x-vacancy.input>
            <x-btn type="submit" class="bg-emerald-500">Create</x-btn>
        </form>

    </div>

</x-layout>   