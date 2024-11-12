@props(['message'])

<div class="invalid-feedback">
    {{ $message ?? $slot }}
</div>
