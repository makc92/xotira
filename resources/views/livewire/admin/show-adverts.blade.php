<div>
    <label>Search</label>
    <input type="text" wire:model="searchAdvert" class="form-control">
    <hr>
    <table class="table table-bordered table-hover dataTable" role="grid"
           aria-describedby="example2_info">
        <thead>
        <tr role="row">
            <th>
                ID
            </th>
            <th>
                Title
            </th>
            <th>Actions
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($adverts as $advert)
            <tr role="row" class="odd">
                <td>{{$advert->id}}</td>
                <td>{{$advert->title}}</td>
                <td class="text-center d-flex justify-content-center">
                    <a href="{{route('admin.adverts.show', $advert->id)}}" class="btn btn-primary"><i
                            class="fas fa-pencil-alt"></i> Show</a>
                    <a href="{{route('admin.adverts.edit', $advert->id)}}" class="btn btn-info"><i
                            class="fas fa-pencil-alt"></i> Edit</a>
                    <form method="POST" action="{{ route('admin.adverts.destroy', $advert->id) }}" class="mr-1">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i> Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
    {{$adverts->links()}}

</div>
