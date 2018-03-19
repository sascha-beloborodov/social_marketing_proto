<?php

namespace App\Http\Controllers;

use App\DataTables\ContentTypeDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateContentTypeRequest;
use App\Http\Requests\UpdateContentTypeRequest;
use App\Repositories\ContentTypeRepository;
use App\Traits\User;
use Flash;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Auth;
use Response;

class ContentTypeController extends AppBaseController
{
    use User;
    /** @var  ContentTypeRepository */
    private $contentTypeRepository;

    public function __construct(ContentTypeRepository $contentTypeRepo)
    {
        $this->contentTypeRepository = $contentTypeRepo;
        Auth::login($this->makeFakeUser());
    }

    /**
     * Display a listing of the ContentType.
     *
     * @param ContentTypeDataTable $contentTypeDataTable
     * @return Response
     */
    public function index(ContentTypeDataTable $contentTypeDataTable)
    {
        return $contentTypeDataTable->render('templates.content_types.index');
    }

    /**
     * Show the form for creating a new ContentType.
     *
     * @return Response
     */
    public function create()
    {
        return view('templates.content_types.create');
    }

    /**
     * Store a newly created ContentType in storage.
     *
     * @param CreateContentTypeRequest $request
     *
     * @return Response
     */
    public function store(CreateContentTypeRequest $request)
    {
        $input = $request->all();

        $contentType = $this->contentTypeRepository->create($input);

        Flash::success('Content Type saved successfully.');

        return redirect(route('contentTypes.index'));
    }

    /**
     * Display the specified ContentType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $contentType = $this->contentTypeRepository->findWithoutFail($id);

        if (empty($contentType)) {
            Flash::error('Content Type not found');

            return redirect(route('contentTypes.index'));
        }

        return view('templates.content_types.show')->with('contentType', $contentType);
    }

    /**
     * Show the form for editing the specified ContentType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $contentType = $this->contentTypeRepository->findWithoutFail($id);

        if (empty($contentType)) {
            Flash::error('Content Type not found');

            return redirect(route('contentTypes.index'));
        }

        return view('templates.content_types.edit')->with('contentType', $contentType);
    }

    /**
     * Update the specified ContentType in storage.
     *
     * @param  int              $id
     * @param UpdateContentTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContentTypeRequest $request)
    {
        $contentType = $this->contentTypeRepository->findWithoutFail($id);

        if (empty($contentType)) {
            Flash::error('Content Type not found');

            return redirect(route('contentTypes.index'));
        }

        $contentType = $this->contentTypeRepository->update($request->all(), $id);

        Flash::success('Content Type updated successfully.');

        return redirect(route('contentTypes.index'));
    }

    /**
     * Remove the specified ContentType from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $contentType = $this->contentTypeRepository->findWithoutFail($id);

        if (empty($contentType)) {
            Flash::error('Content Type not found');

            return redirect(route('contentTypes.index'));
        }

        $this->contentTypeRepository->delete($id);

        Flash::success('Content Type deleted successfully.');

        return redirect(route('contentTypes.index'));
    }
}
