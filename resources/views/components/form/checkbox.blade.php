@props([
    'invalid' => false,
])

<input type="checkbox" {{ $attributes->merge(['class' => 'form-check-input ' . ($invalid ? 'is-invalid' : '')]) }} />
