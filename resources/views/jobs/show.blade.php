<x-layout title='job'>

    <div class="p-4">

        <x-link href="/jobs">back to jobs</x-link>

        <x-vacancy.vacancy :vacancy="$vacancy"></x-vacancy>
        
    </div>

    <x-banner>I'm a banner</x-banner>
        
</x-layout>   