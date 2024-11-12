@props([
    'message'
])

@if($message)
    <div {{ $attributes->merge(['class' => 'text-center text-sm font-medium']) }}>
        {{$message}}
    </div>
@endif