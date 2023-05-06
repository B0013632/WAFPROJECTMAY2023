<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetablesRequest;
use App\Http\Requests\UpdatetablesRequest;
use App\Repositories\tablesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class tablesController extends AppBaseController
{
    /** @var tablesRepository $tablesRepository*/
    private $tablesRepository;

    public function __construct(tablesRepository $tablesRepo)
    {
        $this->tablesRepository = $tablesRepo;
    }

    /**
     * Display a listing of the tables.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tables = $this->tablesRepository->all();

        return view('tables.index')
            ->with('tables', $tables);
    }


    /**
     * Show the form for creating a new tables.
     *
     * @return Response
     */
    public function create()
    {
        return view('tables.create');
    }

    /**
     * Store a newly created tables in storage.
     *
     * @param CreatetablesRequest $request
     *
     * @return Response
     */
    public function store(CreatetablesRequest $request)
    {
        $input = $request->all();

        $tables = $this->tablesRepository->create($input);

        Flash::success('Tables saved successfully.');

        return redirect(route('tables.index'));
    }

    /**
     * Display the specified tables.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tables = $this->tablesRepository->find($id);

        if (empty($tables)) {
            Flash::error('Tables not found');

            return redirect(route('tables.index'));
        }

        return view('tables.show')->with('tables', $tables);
    }

    /**
     * Show the form for editing the specified tables.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tables = $this->tablesRepository->find($id);

        if (empty($tables)) {
            Flash::error('Tables not found');

            return redirect(route('tables.index'));
        }

        return view('tables.edit')->with('tables', $tables);
    }

    /**
     * Update the specified tables in storage.
     *
     * @param int $id
     * @param UpdatetablesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetablesRequest $request)
    {
        $tables = $this->tablesRepository->find($id);

        if (empty($tables)) {
            Flash::error('Tables not found');

            return redirect(route('tables.index'));
        }

        $tables = $this->tablesRepository->update($request->all(), $id);

        Flash::success('Tables updated successfully.');

        return redirect(route('tables.index'));
    }

    /**
     * Remove the specified tables from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tables = $this->tablesRepository->find($id);

        if (empty($tables)) {
            Flash::error('Tables not found');

            return redirect(route('tables.index'));
        }

        $this->tablesRepository->delete($id);

        Flash::success('Tables deleted successfully.');

        return redirect(route('tables.index'));
    }
}
