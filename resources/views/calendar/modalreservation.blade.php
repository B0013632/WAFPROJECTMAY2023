<div id="fullCalModal" class="modal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Book a table!</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <form method="post" action="{{ route('reservations.store') }}">
            @csrf
            <div class="form-group">
              <label for="table_id">Table ID</label>
              <select class="form-control" id="table_id" name="table_id">
			  <option value=""disabled selected>Select a table</option>
                @foreach($tables as $table)
                <option value="{{ $table->id }}">Table {{ $table->id }}</option>
                @endforeach
              </select>
            </div>
			<div class="form-group>
			<label for="customer_id">Customer ID</label>
			<select name="customer_id" id="customer_id" class="form-control">
	<option value=""disabled selected>Select your Customer ID</option>
		@foreach ($customers as $customer)
			<option value="{{ $customer->id }}">Customer{{ $customer->id }}</option>
		@endforeach
	</select>
</div><br>
            <div class="form-group">
              <label for="reservationDate">Reservation Date</label>
              <input type="date" class="form-control" id="reservationDate" name="reservationDate">
            </div>
            <div class="form-group">
              <label for="reservationTime">Reservation Time</label>
              <input type="time" class="form-control" id="reservationTime" name="reservationTime">
            </div>
            <div class="form-group">
              <label for="partySize">Party Size</label>
              <input type="number" class="form-control" id="partySize" name="partySize">
            </div>
            <div class="form-group">
              <label for="specialRequests">Special Requests</label>
              <textarea class="form-control" id="specialRequests" name="specialRequests" rows="3"></textarea>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Create Reservation</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>