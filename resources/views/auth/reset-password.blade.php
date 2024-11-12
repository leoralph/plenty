<x-layouts.guest>
    <h2 class="text-center text-3xl mb-3 font-medium text-slate-700">
        Plenty
    </h2>

    <form action="{{ route('password.reset') }}" method="post">
        @csrf
        <input type="hidden" value="{{ request()->token }}" name="token" />

        <div>
            <x-form.input-label for="email" :value="__('Email')" />
            <x-form.text-field :value="request()->email" type="email" name="email" id="email" autofocus
                class="block w-full" />
            <x-form.input-errors :messages="$errors->get('email')" />
        </div>

        <div class="mt-4">
            <x-form.input-label for="password" :value="__('Password')" />
            <x-form.text-field type="password" name="password" id="password" autofocus class="block w-full" />
            <x-form.input-errors :messages="$errors->get('password')" />
        </div>

        <div class="mt-4">
            <x-form.input-label for="password-confirmation" :value="__('Password Confirmation')" />
            <x-form.text-field type="password" name="password_confirmation" id="password-confirmation" autofocus
                class="block w-full" />
            <x-form.input-errors :messages="$errors->get('password-confirmation')" />
        </div>

        <div class="mt-4 flex items-center justify-end space-x-3.5">
            <x-primary-button type="submit" class="inline">
                {{ __('Reset your password') }}
            </x-primary-button>
        </div>
    </form>
</x-layouts.guest>
