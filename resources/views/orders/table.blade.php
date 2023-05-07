<div class="table-responsive">
<style>
        body {
          background-color: #Bb302f;
        }
        </style>
    <table class="table" id="orders-table" style="background-color: #f9f9f9; border: 1px solid #ddd;">
        <thead style="background-color: #4CAF50; color: white;">
        <tr>
		<th>Order Id</th>
        <th>Customer Id</th>
        <th>Employee Id</th>
        <th>Order Description</th>
        <th>Table Id</th>
        <th>Order Date</th>
        <th>Order Time</th>
        <th>Total</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $orders)
            <tr>
			<td>{{ $orders->id }}</td>
			<td>{{ $orders->customer_id }}</td>
            <td>{{ $orders->employee_id }}</td>
            <td>{{ $orders->order_description }}</td>
            <td>{{ $orders->table_id }}</td>
            <td>{{ $orders->order_date }}</td>
            <td>{{ $orders->order_time }}</td>
            <td>{{ $orders->total }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['orders.destroy', $orders->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('orders.show', [$orders->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('orders.edit', [$orders->id]) }}"
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
