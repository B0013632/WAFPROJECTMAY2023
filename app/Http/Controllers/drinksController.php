<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatedrinksRequest;
use App\Http\Requests\UpdatedrinksRequest;
use App\Repositories\drinksRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Session;

class drinksController extends AppBaseController
{
	public function additem($drinksid)
{
    if (Session::has('cart')) {
        $cart = Session::get('cart');
        if (isset($cart[$drinksid])) {
            $cart[$drinksid]=$cart[$drinksid]+1; //add one to product in cart
        }
        else {
            $cart[$drinksid]=1; //new product in cart
        }
    }
    else {
        $cart[$drinksid]=1; //new cart
    }
    Session::put('cart', $cart);
    return Response::json(['success'=>true,'total'=>array_sum($cart)],200);
}
	
	public function displayGrid(Request $request)
{	
    $drinks=\App\Models\Drinks::all();
    return view('drinks.displaygrid')->with('drinks',$drinks);    
}
	
	
    /** @var drinksRepository $drinksRepository*/
    private $drinksRepository;

    public function __construct(drinksRepository $drinksRepo)
    {
        $this->drinksRepository = $drinksRepo;
    }

    /**
     * Display a listing of the drinks.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $drinks = $this->drinksRepository->all();

        return view('drinks.index')
            ->with('drinks', $drinks);
    }

    /**
     * Show the form for creating a new drinks.
     *
     * @return Response
     */
    public function create()
    {
        return view('drinks.create');
    }

    /**
     * Store a newly created drinks in storage.
     *
     * @param CreatedrinksRequest $request
     *
     * @return Response
     */
    public function store(CreatedrinksRequest $request)
    {
        $input = $request->all();

        $drinks = $this->drinksRepository->create($input);

        Flash::success('Drinks saved successfully.');

        return redirect(route('drinks.index'));
    }

    /**
     * Display the specified drinks.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $drinks = $this->drinksRepository->find($id);

        if (empty($drinks)) {
            Flash::error('Drinks not found');

            return redirect(route('drinks.index'));
        }

        return view('drinks.show')->with('drinks', $drinks);
    }

    /**
     * Show the form for editing the specified drinks.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $drinks = $this->drinksRepository->find($id);

        if (empty($drinks)) {
            Flash::error('Drinks not found');

            return redirect(route('drinks.index'));
        }

        return view('drinks.edit')->with('drinks', $drinks);
    }

    /**
     * Update the specified drinks in storage.
     *
     * @param int $id
     * @param UpdatedrinksRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatedrinksRequest $request)
    {
        $drinks = $this->drinksRepository->find($id);

        if (empty($drinks)) {
            Flash::error('Drinks not found');

            return redirect(route('drinks.index'));
        }

        $drinks = $this->drinksRepository->update($request->all(), $id);

        Flash::success('Drinks updated successfully.');

        return redirect(route('drinks.index'));
    }

    /**
     * Remove the specified drinks from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $drinks = $this->drinksRepository->find($id);

        if (empty($drinks)) {
            Flash::error('Drinks not found');

            return redirect(route('drinks.index'));
        }

        $this->drinksRepository->delete($id);

        Flash::success('Drinks deleted successfully.');

        return redirect(route('drinks.index'));
    }
}
