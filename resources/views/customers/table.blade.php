<div class="table-responsive">
<style>
        body {
          background-color: #1fd1e6;
        }
        </style>
    <table class="table" id="customers-table" style="background-color: #f9f9f9; border: 1px solid #ddd;">
	<thead style="background-color: #4CAF50; color: white;">
        
        <tr>
		<th>Customer ID</th>
        <th>First name</th>
        <th>Surname</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Vip</th>
        <th>Comments</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($customers as $customers)
            <tr>
			<td>{{ $customers->id }}</td>
            <td>{{ $customers->firstname }}</td>
            <td>{{ $customers->surname }}</td>
            <td>{{ $customers->email }}</td>
            <td>{{ $customers->phone }}</td>
            <td>{{ $customers->vip ? 'Yes' : 'No' }}</td>
            <td>{{ $customers->comments }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['customers.destroy', $customers->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('customers.show', [$customers->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('customers.edit', [$customers->id]) }}"
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
