<div>
    <table id="books" class="table table-bordered table-hover" role="grid"
           aria-describedby="example2_info">
        <thead>
        <tr role="row">
            <th rowspan="1" colspan="1">
                ID
            </th>
            <th rowspan="1" colspan="1">
                Photo
            </th>
            <th>
                Actions
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($photos as $photo)
            <tr role="row" class="odd">
                <td >{{$photo->id}}</td>
                <td ><img src="{{$photo->getImagePath('thumbnail', 'thumb')}}" alt=""></td>
                <td class="text-center d-flex justify-content-center">
                    <form method="POST" action="{{ route('admin.photos.destroy', $photo->id) }}" class="mr-1">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i> Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
    {{$photos->links()}}

</div>
