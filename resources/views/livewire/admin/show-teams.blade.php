<div>
    <table id="applications" class="table table-bordered table-hover" role="grid"
           aria-describedby="example2_info">
        <thead>
        <tr role="row">
            <th rowspan="1" colspan="1">
                ID
            </th>
            <th rowspan="1" colspan="1">
                ФИО
            </th>
            <th rowspan="1" colspan="1">
                Должность
            </th>
            <th rowspan="1" colspan="1">
                Actions
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($teams as $team)
            <tr role="row" class="odd">
                <td >{{$team->id}}</td>
                <td >{{$team->name}}</td>
                <td >{{$team->position}}</td>
                <td class="text-center d-flex justify-content-center">
                    <a href="{{route('admin.teams.show', $team->id)}}" class="btn btn-primary"><i
                            class="fas fa-pencil-alt"></i> Show</a>
                    <a href="{{route('admin.teams.edit', $team->id)}}" class="btn btn-info"><i
                            class="fas fa-pencil-alt"></i> Edit</a>
                    <form method="POST" action="{{ route('admin.teams.destroy', $team->id) }}" class="mr-1">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i> Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
    {{$teams->links()}}

</div>
