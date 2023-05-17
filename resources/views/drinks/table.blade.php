<div class="table-responsive">
    <table class="table" id="drinks-table">
        <thead>
        <tr>
            <th>Name</th>
        <th>Description</th>
        <th>Alcohol</th>
        <th>Price</th>
        <th>Image</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($drinks as $drinks)
            <tr>
                <td>{{ $drinks->name }}</td>
            <td>{{ $drinks->description }}</td>
            <td>{{ $drinks->alcohol }}</td>
            <td>{{ $drinks->price }}</td>
            <td>{{ $drinks->image }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['drinks.destroy', $drinks->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('drinks.show', [$drinks->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('drinks.edit', [$drinks->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
