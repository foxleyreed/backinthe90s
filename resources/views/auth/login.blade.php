<x-layout>
    <div class="search-bar container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1">Login</h1>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form action="{{route('login')}}" method="POST" class="card p-5">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 d-flex justify-content-center flex-column align-items-center">
                        <button type="submit" class="btn btn-submit">Submit</button>
                        <p class="mt-2">Not registered? (<a href="{{route('register')}}" class="btn-link">Register</a>)</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
