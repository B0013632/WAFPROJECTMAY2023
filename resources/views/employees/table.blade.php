<div class="table-responsive">
    <table class="table" id="employees-table">
        <thead>
        <tr>
            <th>Firstname</th>
        <th>Surname</th>
        <th>Employeetype</th>
        <th>Dateofbirth</th>
        <th>Pps</th>
        <th>Full Time</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($employees as $employees)
            <tr>
                <td>{{ $employees->firstname }}</td>
            <td>{{ $employees->surname }}</td>
            <td>{{ $employees->employeetype }}</td>
            <td>{{ $employees->dateofbirth }}</td>
            <td>{{ $employees->pps }}</td>
            <td>{{ $employees->full_time }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['employees.destroy', $employees->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('employees.show', [$employees->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('employees.edit', [$employees->id]) }}"
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
