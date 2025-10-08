<x-layout>
    <div class="container-fluid p-5 search-bar text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1">JOBs - Join Our Team</h1>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <form action="{{route('careers.submit')}}" method="POST" class="card p-5">
                    @csrf
                    <div class="mb-3">
                        <label for="role" class="form-label">For which role are you applying?</label>
                        <select name="role" id="role" class="form-control">
                            <option value="" selected disabled>Select a (role)</option>
                            @if (!Auth::user()->is_admin)
                                <option value="admin">Administrator</option>
                            @endif
                            @if (!Auth::user()->is_revisor)
                                <option value="revisor">Revisor</option>
                            @endif
                            @if (!Auth::user()->is_writer)
                                <option value="writer">Writer</option>
                            @endif
                        </select>
                        @error('role')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}" readonly>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Why do you want to apply for this role? Tell us</label>
                        <textarea name="message" id="message" cols="30" rows="7" class="form-control">{{old('message')}}</textarea>
                        @error('message')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-submit">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-6 p-5">
                <h2>Work as an Administrator</h2>
                <p>By choosing to work as an Administrator, you will handle job requests and add or edit categories.</p>
                <h2>Work as a Revisor</h2>
                <p>By choosing to work as a Revisor, you will decide whether an article can be published on the platform or not.</p>
                <h2>Work as an Writer</h2>
                <p>By choosing to work as an Writer, you will be able to write articles that will be published.</p>
            </div>
        </div>
    </div>
</x-layout>
