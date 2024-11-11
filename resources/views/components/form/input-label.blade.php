@props([
    'value'
])

<label {{ $attributes->merge(['class' => 'block font-medium text-slate-500']) }}>
    {{ $value ?? $slot }}
</label>