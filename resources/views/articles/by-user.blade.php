<x-layout>
    <div class="container-fluid p-5 search-bar text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1 text-capitalize">Articles of: ({{ $user->name }})</h1>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-evenly gap-3">
            @foreach ($articles as $article)
            <div class="col-12 col-md-3">
                <x-article-card :article="$article"/>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>
