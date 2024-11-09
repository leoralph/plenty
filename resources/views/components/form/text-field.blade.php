@props([
    'invalid' => false,
])

<input {{ $attributes->merge(['class' => 'p-2 border border-slate-300 focus:border-slate-400 caret-black rounded-lg shadow']) }} />
