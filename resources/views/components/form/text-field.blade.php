@props([
    'invalid' => false,
])

<input {{ $attributes->merge(['class' => 'form-control ' . ($invalid ? 'is-invalid' : '')]) }} />
