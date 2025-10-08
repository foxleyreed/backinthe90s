<x-layout>
    <div class="container-fluid p-5 search-bar text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1">{{ $article->title }}</h1>
                <h2>{{ $article->subtitle }}</h2>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 d-flex flex-column">
                <img src="{{ Storage::url($article->image) }}" class="img-fluid"
                    alt="Article image: {{ $article->title }}">
                <div class="text-center my-3">
                    @if($article->category)
                    <p class="fs-5">Category:
                        <a href="{{route('article.byCategory', $article->category)}}" class="text-capitalize fw-bold text-muted">{{ $article->category->name }}</a>
                    </p>
                    @else
                    <p class="fs-5">No Category</p>
                    @endif
                    <div class="text-muted my-3">
                        <p>Published on {{ $article->created_at->format('d/m/Y') }} by {{ $article->user->name }}</p>
                    </div>
                </div>
                <hr>
                <p>{{ $article->body }}</p>
                @if (Auth::user() && Auth::user()->is_revisor)
                    <div class="container my-5">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-evenly">
                                <form action="{{ route('revisor.acceptArticle', $article) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-submit px-5">Accept</button>
                                </form>
                                <form action="{{ route('revisor.rejectArticle', $article) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger px-5">Reject</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="text-center">
                    <p class="mt-2">Go Back to (<a href="{{ route('article.index') }}" class="btn-link">all articles</a>)</p>
                </div>
            </div>
        </div>
    </div>
</x-layout>
