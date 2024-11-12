<x-layouts.guest>
    <form action="{{ route('login') }}" method="post">
        @csrf

        <h2 class="text-center text-3xl mb-3 font-medium text-slate-700">
            Plenty
        </h2>

        <div>
            <x-form.input-label for="email" :value="__('Email')" />
            <x-form.text-field type="text" name="email" id="email" autofocus class="block w-full" />
            <x-form.input-errors :messages="$errors->get('email')" />

        </div>

        <div class="mt-4">
            <x-form.input-label for="password" :value="__('Password')" />
            <x-form.text-field type="password" name="password" id="password" class="block w-full" />
            <x-form.input-errors :messages="$errors->get('password')" />
        </div>

        <div class="mt-2">
            <label for="remember" class="flex items-center">
                <input type="checkbox" name="remember" id="remember" class="rounded border-slate-400 text-blue-400">
                <span class="ml-2 text-sm text-slate-500">
                    {{ __('Remember me') }}
                </span>
            </label>
        </div>

        <div class="mt-4 flex items-center justify-end space-x-3.5">
            <x-link href="{{ route('forgot-password') }}" class="text-sm">
                {{ __('Forgot your password?') }}
            </x-link>
            <x-primary-button type="submit" class="inline">
                {{ __('Login') }}
            </x-primary-button>
        </div>
    </form>

    <x-divider />

    <div class="text-center">
        <span class="text-slate-500">{{ __("Don't have an account?") }}</span>
        <x-link href="{{ route('register') }}">
            {{ __('Register') }}
        </x-link>
    </div>

</x-layouts.guest>
