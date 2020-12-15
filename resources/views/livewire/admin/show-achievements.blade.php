<div>
    <label>Поиск</label>
    <input type="text" wire:model="searchAchievement" class="form-control">
    <hr>
    <table id="veterans" class="table table-bordered table-hover dataTable" role="grid"
           aria-describedby="example2_info">
        <thead>
        <tr role="row">
            <th rowspan="1" colspan="1">
                ID
            </th>
            <th rowspan="1" colspan="1">
                Title
            </th>
            <th rowspan="1" colspan="1">Actions
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($achievements as $achievement)
            <tr role="row" class="odd">
                <td class="sorting_1">{{$achievement->id}}</td>
                <td class="sorting_1">{{$achievement->title}}</td>
                <td class="text-center d-flex justify-content-center">
                    <a href="{{route('admin.achievements.show', $achievement->id)}}" class="btn btn-primary"><i
                            class="fas fa-pencil-alt"></i> Show</a>
                    <a href="{{route('admin.achievements.edit', $achievement->id)}}" class="btn btn-info"><i
                            class="fas fa-pencil-alt"></i> Edit</a>
                    <form method="POST" action="{{ route('admin.achievements.destroy', $achievement->id) }}" class="mr-1">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i> Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
    {{$achievements->links()}}

</div>
