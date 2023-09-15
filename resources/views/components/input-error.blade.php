
@props(['messages'])

@if ($messages)
    <ul class="list-unstyled small text-danger mb-0 {{ $attributes->get('class') }}">
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
