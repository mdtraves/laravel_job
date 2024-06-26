<x-layout title='jobs'>

    <div class="p-4 container mx-auto">

        <x-back></x-back>


        <form action="/jobs/create" method="POST" class="flex flex-col gap-2 justify-center items-start">
            @csrf
            <x-input id='title'></x-input>
            <x-input id='description'></x-input>
            <x-input id='company'></x-input>
            <x-input id='location'></x-input>
            <x-input id='salary'></x-input>
            <x-input id='expiry_date' type='date'></x-input>
            <x-btn type="submit" class="bg-emerald-500">Create</x-btn>
        </form>

    </div>

</x-layout>   

