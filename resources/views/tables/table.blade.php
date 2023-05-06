<div class="table-responsive">
    <table class="table" id="tables-table">
        <thead>
        <tr>
		<th>Table ID</th>
        <th>Capacity</th>
        <th>Booked</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tables as $tables)
            <tr>
			<td>{{ $tables->id }}</td>
            <td>{{ $tables->capacity }}</td>
             <td>{{ $tables->booked ? 'Yes' : 'No' }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['tables.destroy', $tables->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tables.show', [$tables->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('tables.edit', [$tables->id]) }}"
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
