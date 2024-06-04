@props(['form' => null, 'type' => 'button'])

<button type="{{ $type }}" {{ $form ? 'form='.$form : '' }} {{ $attributes->merge(['class' => 'my-4 inline-flex items-center text-white py-1 px-2.5 rounded']) }}>
    {{ $slot }}
</button>
