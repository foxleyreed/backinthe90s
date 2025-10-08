<x-layout>
    <div class="container-fluid p-5 search-bar text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1">Edit (article)</h1>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form action="{{route('article.update', $article)}}" method="POST" class="card p-5" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{ $article->title }}">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Subtitle</label>
                        <input type="text" name="subtitle" class="form-control" id="subtitle" value="{{ $article->subtitle }}">
                        @error('subtitle')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Uploaded Image</label>
                        <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}" class="w-50 d-block">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">New Image</label>
                        <input type="file" name="image" class="form-control" id="image">
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select name="category" id="category" class="form-control">
                            <option value="" selected disabled>Select a (category)</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @if($article->category_id == $category->id) selected @endif>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="tags" class="form-label">Tags</label>
                        <input type="text" name="tags" class="form-control" id="tags" value="{{ $article->tags->implode('name', ', ') }}">
                        <span class="small text-muted fst-italic">**Separate each tag with a comma</span>
                        @error('tags')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Text</label>
                        <textarea name="body" class="form-control" id="body" cols="70" rows="7">{{ $article->body }}</textarea>
                        @error('body')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-5 d-flex justify-content-center flex-column align-items-center">
                        <button type="submit" class="btn btn-submit">Submit</button>
                        <p class="mt-2">Go Back to (<a href="{{route('homepage')}}" class="btn-link">homepage</a>)</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
