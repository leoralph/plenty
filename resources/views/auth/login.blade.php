<x-layouts.guest>
    <div class="container">



        <div class="row justify-content-center py-5 mt-5">

            <div class="col-10 col-md-3">

                <div class="row ">

                    <div class="col-12  text-center">
                        <h2>Plenty</h2>
                    </div>

                </div>

                <div class="row">


                    <form action="{{ route(name: 'login') }}" method="post">
                        @csrf

                        <div class="form-outline mb-2">

                            <x-form.input-label for="email" :value="__('Email')"></x-form.input-label>

                            <x-form.text-field :invalid="$errors->has('email')" id="email" name="email" />

                            @error('email')
                                <x-form.input-error :message="$message" />
                            @enderror
                        </div>


                        <div class="form-outline mb-2">

                            <x-form.input-label for="password" :value="__('Password')"></x-form.input-label>

                            <x-form.text-field :invalid="$errors->has('password')" id="password" name="password"
                                type="password" />

                            @error('password')
                                <x-form.input-error :message="$message" />
                            @enderror

                        </div>

                        <div class="col-12 mb-2">

                            <x-form.checkbox :invalid="$errors->has('remember')" id="remember" name="remember"
                                value="1" />

                            <x-form.input-label for="remember" :value="__('Remember me')" />

                            @error('remember')
                                <x-form.input-error :message="$message" />
                            @enderror

                            <a href="{{route('forgot-password')}}" class="float-end">{{__('Forgot password?')}}</a>

                        </div>

                        <div class="col-12 d-grid">
                            <button type="submit" class="btn btn-primary" id="login">{{__("Login")}}</button>
                        </div>

                    </form>



                </div>

                <hr class="my-4">

                <div class="row">

                    <div class="col-12">
                        <p class="text-center">{{__("Don't have an account?")}} <a
                                href="{{route('register')}}">{{__('Register')}}</a></p>
                    </div>

                </div>

            </div>

        </div>

    </div>
</x-layouts.guest>