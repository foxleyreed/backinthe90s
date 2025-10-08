<x-layout>
    <div class="container-fluid p-5 search-bar text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1">Welcome Back, Administrator ({{ Auth::user()->name }})</h1>
            </div>
        </div>
    </div>
    @if(session('message'))
        <div class="alert alert-success m-5">
            {{ session('message') }}
        </div>
    @endif
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Requests for the (administrator) role</h2>
                <x-requests-table :roleRequests="$adminRequests" role="amministratore"/>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Requests for the (revisor) role</h2>
                <x-requests-table :roleRequests="$revisorRequests" role="revisore"/>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Requests for the (writer) role</h2>
                <x-requests-table :roleRequests="$writerRequests" role="redattore"/>
            </div>
        </div>
    </div>
    <hr>
    <div class="container my-5">
        <div class="d-flex justify-content-between">
            <h2>All (categories)</h2>
            <form action="{{ route('admin.storeCategory') }}" method="POST" class="w-50 d-flex m-3">
                @csrf
                <input type="text" name="name" class="form-control me-2" placeholder="Insert new (category)" aria-label="Insert new category">
                <button type="submit" class="btn btn-submit">Insert</button>
            </form>
        </div>
        <x-metainfo-table :metaInfos="$categories" metaType="categorie"/>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>All (tags)</h2>
                <x-metainfo-table :metaInfos="$tags" metaType="tags"/>
            </div>
        </div>
    </div>
</x-layout>
