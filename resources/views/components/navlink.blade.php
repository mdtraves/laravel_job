@props(['href', 'live'])

<a href='{{ $href }}' {{ $attributes->merge([ "class" => "text-sm font-semibold leading-6 text-red-600 p-4 " . ( $live ? ' underline' : '' )]) }}  >{{ $slot }} </a>
