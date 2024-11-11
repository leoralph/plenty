<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-blue-500 hover:bg-blue-600 text-white rounded-lg py-2 px-4']) }}>
    {{ $slot }}
</button>
