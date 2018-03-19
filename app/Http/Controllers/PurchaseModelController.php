<?php

namespace App\Http\Controllers;

use App\DataTables\PurchaseModelDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePurchaseModelRequest;
use App\Http\Requests\UpdatePurchaseModelRequest;
use App\Repositories\PurchaseModelRepository;
use App\Traits\User;
use Flash;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Auth;
use Response;

class PurchaseModelController extends AppBaseController
{
    use User;
    /** @var  PurchaseModelRepository */
    private $purchaseModelRepository;

    public function __construct(PurchaseModelRepository $purchaseModelRepo)
    {
        $this->purchaseModelRepository = $purchaseModelRepo;
        Auth::login($this->makeFakeUser());
    }

    /**
     * Display a listing of the PurchaseModel.
     *
     * @param PurchaseModelDataTable $purchaseModelDataTable
     * @return Response
     */
    public function index(PurchaseModelDataTable $purchaseModelDataTable)
    {
        return $purchaseModelDataTable->render('templates.purchase_models.index');
    }

    /**
     * Show the form for creating a new PurchaseModel.
     *
     * @return Response
     */
    public function create()
    {
        return view('templates.purchase_models.create');
    }

    /**
     * Store a newly created PurchaseModel in storage.
     *
     * @param CreatePurchaseModelRequest $request
     *
     * @return Response
     */
    public function store(CreatePurchaseModelRequest $request)
    {
        $input = $request->all();

        $purchaseModel = $this->purchaseModelRepository->create($input);

        Flash::success('Purchase Model saved successfully.');

        return redirect(route('purchaseModels.index'));
    }

    /**
     * Display the specified PurchaseModel.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $purchaseModel = $this->purchaseModelRepository->findWithoutFail($id);

        if (empty($purchaseModel)) {
            Flash::error('Purchase Model not found');

            return redirect(route('purchaseModels.index'));
        }

        return view('templates.purchase_models.show')->with('purchaseModel', $purchaseModel);
    }

    /**
     * Show the form for editing the specified PurchaseModel.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $purchaseModel = $this->purchaseModelRepository->findWithoutFail($id);

        if (empty($purchaseModel)) {
            Flash::error('Purchase Model not found');

            return redirect(route('purchaseModels.index'));
        }

        return view('templates.purchase_models.edit')->with('purchaseModel', $purchaseModel);
    }

    /**
     * Update the specified PurchaseModel in storage.
     *
     * @param  int              $id
     * @param UpdatePurchaseModelRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePurchaseModelRequest $request)
    {
        $purchaseModel = $this->purchaseModelRepository->findWithoutFail($id);

        if (empty($purchaseModel)) {
            Flash::error('Purchase Model not found');

            return redirect(route('purchaseModels.index'));
        }

        $purchaseModel = $this->purchaseModelRepository->update($request->all(), $id);

        Flash::success('Purchase Model updated successfully.');

        return redirect(route('purchaseModels.index'));
    }

    /**
     * Remove the specified PurchaseModel from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $purchaseModel = $this->purchaseModelRepository->findWithoutFail($id);

        if (empty($purchaseModel)) {
            Flash::error('Purchase Model not found');

            return redirect(route('purchaseModels.index'));
        }

        $this->purchaseModelRepository->delete($id);

        Flash::success('Purchase Model deleted successfully.');

        return redirect(route('purchaseModels.index'));
    }
}
