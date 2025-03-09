<x-guest-layout>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-md-5">
                <div class="card">
                    <div class="card-body p-4">

                        <div class="text-center w-75 mx-auto auth-logo mb-4">
                            <a href="index.html" class="logo-dark">
                                <span><img src="assets/images/logo-dark.png" alt="" height="22"></span>
                            </a>

                            <a href="index.html" class="logo-light">
                                <span><img src="assets/images/logo-light.png" alt="" height="22"></span>
                            </a>
                        </div>

                        <form action="{{ route('admin.login') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label class="form-label" for="emailaddress">Email address</label>
                                <input class="form-control" type="email" placeholder="Enter your email" name="email" value="{{ old('email') }}">
                                @error('email')
                                    <div class="text-danger invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <a href="pages-recoverpw.html" class="text-muted float-end"><small></small></a>
                                <label class="form-label" for="password">Password</label>
                                <input class="form-control" type="password" placeholder="Enter your password" name="password">
                                @error('password')
                                    <div class="text-danger invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <div class="">
                                    <input class="form-check-input" type="checkbox" name="remember" checked>
                                    <label class="form-check-label ms-2" for="checkbox-signin">Remember me</label>
                                </div>
                            </div>

                            <div class="form-group mb-0 text-start">
                                <hr/>
                                <button class="btn btn-primary px-4" type="submit"> Log In </button>
                            </div>

                        </form>
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->


            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>

</x-guest-layout>
