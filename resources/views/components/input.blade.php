@props(['id', 'type' => 'text', 'value' => ''])

<input type="{{ $type }}" name="{{ $id }}" id='{{ $id }}' placeholder="{{ $id }}" class="p-2 rounded border w-full" value="{{ $value }}">