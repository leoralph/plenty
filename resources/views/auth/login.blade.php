<x-layouts.guest>
    <div class="container">



        <div class="row justify-content-center py-5 mt-5">

            <div class="col-10 col-md-3">

                <div class="row ">

                    <div class="col-12  text-center">
                        <h2>Plenty</h2>
                    </div>

                </div>

                <div class="row ">


                    <form action="{{ route('login') }}" method="post">
                        @csrf

                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="email">{{__('E-mail')}} :</label>
                            <input type="text" id="email" name="email" class="form-control" />
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="password">{{__('Password')}} :</label>
                            <input type="password" id="password" name="password" class="form-control" />
                        </div>

                        <div class="col-12">
                            <input type="checkbox" id="remember" name="remember" checked value="1" />
                            <label for="remember">{{__("Remember-me")}}</label>
                        </div>

                        @error('email')
                            <div class="col-12">
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            </div>
                        @enderror

                        @error('password')
                            <div class="col-12">
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            </div>
                        @enderror

                        @error('remember')
                            <div class="col-12">
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            </div>
                        @enderror

                        @error('login')
                            <div class="col-12">
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            </div>
                        @enderror

                        <div class="row">
                            <div class="col-6 mt-4 d-grid">
                                <button type="submit" class="btn btn-primary" id="login">{{__("Login")}}</button>
                            </div>

                            <div class="col-6 mt-4 d-grid">
                                <button class="btn btn-outline-secondary" type="button"
                                    id="register">{{__("Register")}}</button>
                            </div>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>
</x-layouts.guest>
