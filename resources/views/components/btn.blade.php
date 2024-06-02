@props(['form' => null, 'type' => 'button'])

<button type="{{ $type }}" {{ $form ? 'form='.$form : '' }} {{ $attributes->merge(['class' => 'inline-block text-white py-1 px-2.5 rounded my-2']) }}>
    {{ $slot }}
</button>
