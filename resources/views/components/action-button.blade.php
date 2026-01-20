@props(['href', 'type'])

@php

    $classes = 'btn btn-sm me-1 ';
    
 
    if ($type === 'view') {
        $classes .= 'btn-outline-primary';
    } elseif ($type === 'edit') {
        $classes .= 'btn-outline-secondary';
    } else {
        $classes .= 'btn-primary';
    }
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>