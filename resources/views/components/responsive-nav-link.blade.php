@props(['active'])

@php
$classes = ($active ?? false)
    ? 'nav-link active'
    : 'nav-link';

$attributes = $attributes->merge(['class' => $classes]);
@endphp

<a {{ $attributes }}>
    {{ $slot }}
</a>
