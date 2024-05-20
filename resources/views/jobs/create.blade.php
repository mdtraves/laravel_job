<x-layout title='jobs'>

    <div class="p-4">

        <form action="/jobs/create" method="POST">
            @csrf
            <x-vacancy.input id='title'></x-vacancy.input>
            <x-vacancy.input id='description'></x-vacancy.input>
            <x-vacancy.input id='company'></x-vacancy.input>
            <x-vacancy.input id='location'></x-vacancy.input>
            <x-vacancy.input id='salary'></x-vacancy.input>
            <x-vacancy.input id='expiry_date' type='date'></x-vacancy.input>
            <input type="submit" value="Create" class="p-2 rounded border bg-blue-500 text-white">
        </form>

    </div>

</x-layout>   