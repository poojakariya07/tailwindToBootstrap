@props(['value'])

<label class="form-label font-weight-medium small text-gray-700 {{ $attributes->get('class') }}">
    {{ $value ?? $slot }}
</label>