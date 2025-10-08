<x-layout>
    <div class="container-fluid p-5 search-bar text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1">Welcome Back, Writer ({{ Auth::user()->name }})</h1>
            </div>
        </div>
    </div>
    @if (session('message'))
        <div class="alert alert-success m-5">
            {{ session('message') }}
        </div>
    @endif
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articles pending review</h2>
                <x-writer-articles-table :articles="$unrevisionedArticles"/>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Published (articles)</h2>
                <x-writer-articles-table :articles="$acceptedArticles"/>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Rejected (articles)</h2>
                <x-writer-articles-table :articles="$rejectedArticles"/>
            </div>
        </div>
    </div>
</x-layout>
