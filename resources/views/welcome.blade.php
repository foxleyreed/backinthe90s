<x-layout>
    @if (session('alert'))
        <div class="alert alert-danger m-5">
            {{ session('alert') }}
        </div>
    @endif
    @if (session('message'))
        <div class="alert alert-success m-5">
            {{ session('message') }}
        </div>
    @endif
    <div class="search-bar container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <form action="{{route('article.search')}}" method="GET" class="d-flex" role="search">
                    <input class="search-bar-input form-control" type="search" placeholder="Search..." aria-label="Search" name="query"/>
                </form>
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
