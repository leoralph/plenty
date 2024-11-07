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

                    
                    <form >
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="e-mail">{{__('E-mail')}} :</label>
                            <input type="email" id="e-mail" class="form-control"/>
            
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="password">{{__('Password')}} :</label>
                            <input type="password" id="password" class="form-control" />
                        </div>

                        <div class="col-12">
                            <input type="checkbox" id="remember" checked/>
                            <label for="remember">{{__("Remember-me")}}</label>
                        </div>

                        <div class="row">
                            <div class="col-6 mt-4 d-grid">
                                <Button class="btn btn-outline-secondary" type="button" id="login" >{{__("Login")}}</Button>
                                
                            </div>
                            <div class="col-6 mt-4 d-grid">
                                <Button class="btn btn-outline-primary" type="button" id="create-account">{{__("Create Account")}}</Button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>

    </div>
</x-layouts.guest>
