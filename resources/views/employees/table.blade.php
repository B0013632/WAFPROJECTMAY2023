<div class="table-responsive">
<style>
        body {
          background-color: #abdbe3;
        }
        </style>
    <table class="table" id="employees-table" style="background-color: #f9f9f9; border: 1px solid #ddd;">
        <thead style="background-color: #4CAF50; color: white;">
        <tr>
            <th>Employee ID</th>
            <th>Firstname</th>
            <th>Surname</th>
            <th>Employee Type</th>
            <th>Date of birth</th>
            <th>Pps</th>
            <th>Full Time</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($employees as $employees)
            <tr>
                <td>{{ $employees->id }}</td>
                <td>{{ $employees->firstname }}</td>
                <td>{{ $employees->surname }}</td>
                <td>{{ $employees->employeetype }}</td>
                <td>{{ $employees->dateofbirth }}</td>
                <td>{{ $employees->pps }}</td>
                <td>{{ $employees->full_time ? 'Yes' : 'No'  }}</td>
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
