<div>
    <label>Search</label>
    <input type="text" wire:model="searchVeteran" class="form-control">
    <hr>
    <table id="veterans" class="table table-bordered table-hover dataTable" role="grid"
           aria-describedby="example2_info">
        <thead>
        <tr role="row">
            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                ID
            </th>
            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                Name
            </th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                aria-label="CSS grade: activate to sort column ascending">Actions
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($veterans as $veteran)
            <tr role="row" class="odd">
                <td class="sorting_1">{{$veteran->id}}</td>
                <td class="sorting_1">{{$veteran->name}}</td>
                <td class="text-center d-flex justify-content-center">
                    <a href="{{route('admin.veterans.show', $veteran->id)}}" class="btn btn-primary"><i
                            class="fas fa-pencil-alt"></i> Show</a>
                    <a href="{{route('admin.veterans.edit', $veteran->id)}}" class="btn btn-info"><i
                            class="fas fa-pencil-alt"></i> Edit</a>
                    <form method="POST" action="{{ route('admin.veterans.destroy', $veteran->id) }}" class="mr-1">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i> Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
    {{$veterans->links()}}

</div>
