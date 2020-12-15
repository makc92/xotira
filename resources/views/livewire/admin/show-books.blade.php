<div>
    <label>Поиск</label>
    <input type="text" wire:model="searchBook" class="form-control">
    <hr>
    <table id="books" class="table table-bordered table-hover" role="grid"
           aria-describedby="example2_info">
        <thead>
        <tr role="row">
            <th rowspan="1" colspan="1">
                ID
            </th>
            <th rowspan="1" colspan="1">
                Title
            </th>
            <th rowspan="1" colspan="1">
                Actions
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr role="row" class="odd">
                <td >{{$book->id}}</td>
                <td >{{$book->title}}</td>
                <td class="text-center d-flex justify-content-center">
                    <a href="{{route('admin.books.show', $book->id)}}" class="btn btn-primary"><i
                            class="fas fa-pencil-alt"></i> Show</a>
                    <a href="{{route('admin.books.edit', $book->id)}}" class="btn btn-info"><i
                            class="fas fa-pencil-alt"></i> Edit</a>
                    <form method="POST" action="{{ route('admin.books.destroy', $book->id) }}" class="mr-1">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i> Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
    {{$books->links()}}

</div>
