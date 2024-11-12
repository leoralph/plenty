<x-layouts.guest>
    <h2 class="text-center text-3xl mb-3 font-medium text-slate-700">
        Plenty
    </h2>

    <form action="{{ route('forgot-password') }}" method="post">
        @csrf

        <div>
            <x-form.input-label for="email" :value="__('Email')" />
            <x-form.text-field type="text" name="email" id="email" autofocus class="block w-full" />
            <x-form.input-errors :messages="$errors->get('email')" />
        </div>

        <div class="mt-4 flex items-center justify-end space-x-3.5">
            <x-link href="{{ route('login') }}" class="text-sm">
                {{ __('Login') }}
            </x-link>
            <x-primary-button type="submit" class="inline">
                {{ __('Send Reset Link') }}
            </x-primary-button>
        </div>

        @if (session()->has('status'))
            <x-form.redirect-message class="mt-4 text-green-400" :message="session('status')" />
        @endif

    </form>
</x-layouts.guest>