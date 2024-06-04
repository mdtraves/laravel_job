<x-layout title='job'>

    <div class="p-4">

        <x-link href="/jobs">back to jobs</x-link>

        <x-vacancy.edit :vacancy="$vacancy"></x-vacancy.edit>
        
    </div>

    <x-banner>I'm a banner</x-banner>
        
</x-layout>   