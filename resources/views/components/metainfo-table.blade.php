<table class="table table-striped table-hover">
    <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Related articles</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($metaInfos as $metaInfo)
        <tr>
            <th scope="row">{{ $metaInfo->id }}</th>
            <td>{{ $metaInfo->name }}</td>
            <td>{{ count($metaInfo->articles) }}</td>
            @if ($metaType == 'tags')
            <td>
                <form action="{{route('admin.editTag', ['tag' => $metaInfo])}}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="text" name="name" placeholder="New (tag) name" class="form-control w-50 d-inline">
                    <button type="submit" class="btn btn-submit">Update</button>
                </form>
            </td>
            <td>
                <form action="{{route('admin.deleteTag', ['tag' => $metaInfo])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
            @else
            <td>
                <form action="{{route('admin.editCategory', ['category' => $metaInfo])}}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="text" name="name" placeholder="New (category) name" class="form-control w-50 d-inline">
                    <button type="submit" class="btn btn-submit">Update</button>
                </form>
            </td>
            <td>
                <form action="{{route('admin.deleteCategory', ['category' => $metaInfo])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>
