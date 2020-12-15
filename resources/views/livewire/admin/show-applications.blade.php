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
                Телефон
            </th>
            <th rowspan="1" colspan="1">
                Дата подачи заявки
            </th>
            <th rowspan="1" colspan="1">
                Actions
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($applications as $application)
            <tr role="row" class="odd">
                <td >{{$application->id}}</td>
                <td >{{$application->name}}</td>
                <td >{{$application->phone}}</td>
                <td >{{$application->created_at}}</td>
                <td class="text-center d-flex justify-content-center">
                    <a href="{{route('admin.applications.show', $application->id)}}" class="btn btn-primary"><i
                            class="fas fa-pencil-alt"></i> Show</a>
                    <form method="POST" action="{{ route('admin.applications.destroy', $application->id) }}" class="mr-1">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i> Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
    {{$applications->links()}}

</div>
