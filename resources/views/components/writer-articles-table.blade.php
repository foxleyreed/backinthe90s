<table class="table table-striped table-hover">
    <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Subtitle</th>
            <th scope="col">Category</th>
            <th scope="col">Tags</th>
            <th scope="col">Published on</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
        <tr>
            <th scope="row">{{ $article->id }}</th>
            <td>{{ $article->title }}</td>
            <td>{{ $article->subtitle }}</td>
            <td>{{ $article->category->name ?? 'No Category' }}</td>
            <td>
                @foreach ($article->tags as $tag)
                    #{{ $tag->name }}
                @endforeach
            </td>
            <td>{{ $article->created_at->format('d/m/Y') }}</td>
            <td>
                <div class="d-flex gap-1 flex-wrap">
                    <a href="{{ route('article.show', $article) }}" class="btn btn-show">Read</a>
                    <a href="{{route('article.edit', $article)}}" class="btn btn-submit">Update</a>
                    <form action="{{route('article.destroy', $article)}}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

