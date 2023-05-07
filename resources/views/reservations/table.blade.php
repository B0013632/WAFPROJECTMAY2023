<div class="table-responsive">
<style>
        body {
          background-color: #Ce8e10;
        }
        </style>
    <table class="table" id="reservations-table" style="background-color: #f9f9f9; border: 1px solid #ddd;">
        <thead style="background-color: #4CAF50; color: white;">
        <tr>
		<th>Reservation Id</th>
        <th>Table Id</th>
        <th>Customer Id</th>
        <th>Reservation Date</th>
        <th>Reservation Time</th>
        <th>Party size</th>
        <th>Special Requests</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($reservations as $reservations)
            <tr>
			 <td>{{ $reservations->id }}</td>
                <td>{{ $reservations->table_id }}</td>
            <td>{{ $reservations->customer_id }}</td>
            <td>{{ $reservations->reservationDate }}</td>
            <td>{{ $reservations->reservationTime }}</td>
            <td>{{ $reservations->partySize }}</td>
            <td>{{ $reservations->specialRequests }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['reservations.destroy', $reservations->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('reservations.show', [$reservations->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('reservations.edit', [$reservations->id]) }}"
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
