
@props(['status'])

@if ($status)
    <div class="font-weight-medium small text-success">
        {{ $status }}
    </div>
@endif