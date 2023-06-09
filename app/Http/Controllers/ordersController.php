<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateordersRequest;
use App\Http\Requests\UpdateordersRequest;
use App\Repositories\ordersRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Customers as Customers;
use App\Models\Employees as Employees;
use App\Models\Tables as Tables;
use Illuminate\Http\Request;
use Flash;
use Response;

class ordersController extends AppBaseController
{
	public function create()
	{
		// Find all customers from the DB and return as an array of Customer.php objects
		$customers = Customers::all();
	
		// Find all employees from the DB and return as an array of Employees.php objects
		$employees = \App\Models\Employees::all();
		
		// Find all tables from the DB and return as an array of Table.php objects
		$tables = Tables::all();



    // Return the orders.create view with $tables and $customers as view variables
    return view('orders.create')->with('customers', $customers)->with('employees', $employees)->with('tables', $tables);
	}
	
	
    /** @var ordersRepository $ordersRepository*/
    private $ordersRepository;

    public function __construct(ordersRepository $ordersRepo)
    {
        $this->ordersRepository = $ordersRepo;
    }

    /**
     * Display a listing of the orders.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $orders = $this->ordersRepository->all();

        return view('orders.index')
            ->with('orders', $orders);
    }


    /**
     * Store a newly created orders in storage.
     *
     * @param CreateordersRequest $request
     *
     * @return Response
     */
    public function store(CreateordersRequest $request)
    {
        $input = $request->all();

        $orders = $this->ordersRepository->create($input);

        Flash::success('Orders saved successfully.');

        return redirect(route('orders.index'));
    }

    /**
     * Display the specified orders.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $orders = $this->ordersRepository->find($id);

        if (empty($orders)) {
            Flash::error('Orders not found');

            return redirect(route('orders.index'));
        }

        return view('orders.show')->with('orders', $orders);
    }

    /**
     * Show the form for editing the specified orders.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $orders = $this->ordersRepository->find($id);

        if (empty($orders)) {
            Flash::error('Orders not found');

            return redirect(route('orders.index'));
        }

        return view('orders.edit')->with('orders', $orders);
    }

    /**
     * Update the specified orders in storage.
     *
     * @param int $id
     * @param UpdateordersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateordersRequest $request)
    {
        $orders = $this->ordersRepository->find($id);

        if (empty($orders)) {
            Flash::error('Orders not found');

            return redirect(route('orders.index'));
        }

        $orders = $this->ordersRepository->update($request->all(), $id);

        Flash::success('Orders updated successfully.');

        return redirect(route('orders.index'));
    }

    /**
     * Remove the specified orders from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $orders = $this->ordersRepository->find($id);

        if (empty($orders)) {
            Flash::error('Orders not found');

            return redirect(route('orders.index'));
        }

        $this->ordersRepository->delete($id);

        Flash::success('Orders deleted successfully.');

        return redirect(route('orders.index'));
    }
}
