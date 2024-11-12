<x-layouts.guest>
    <h2 class="text-center text-3xl mb-3 font-medium text-slate-700">
        Plenty
    </h2>

    <form action="{{ route('register') }}" method="post">
        @csrf
        <div>
            <x-form.input-label for="name" :value="__('Name')" />
            <x-form.text-field class="block w-full" id="name" name="name" autofocus />
            <x-form.input-errors :messages="$errors->get('name')"></x-form>
        </div>
        <div class="mt-4">
            <x-form.input-label for="email" :value="__('Email')" />
            <x-form.text-field class="block w-full" id="email" name="email" />
            <x-form.input-errors :messages="$errors->get('email')"></x-form>
        </div>
        <div class="mt-4">
            <x-form.input-label for="password" :value="__('Password')" />
            <x-form.text-field class="block w-full" id="password" name="password" type="password" />
            <x-form.input-errors :messages="$errors->get('password')"></x-form>
        </div>
        <div class="mt-4">
            <x-form.input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-form.text-field class="block w-full" id="password_confirmation" name="password_confirmation"
                type="password" />
            <x-form.input-errors :messages="$errors->get('password_confirmation')"></x-form>
        </div>
        <div class="mt-4 flex justify-end">
            <x-primary-button type="submit" class="inline">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

    <x-divider />

    <div class="text-center">
        <span class="text-slate-500">{{ __('Already have an account?') }}</span>
        <x-link href="{{ route('login') }}">
            {{ __('Login') }}
        </x-link>
    </div>
</x-layouts.guest>
