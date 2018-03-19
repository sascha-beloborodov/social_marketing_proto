<?php

namespace App\Http\Controllers;

use App\DataTables\SocialDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateSocialRequest;
use App\Http\Requests\UpdateSocialRequest;
use App\Repositories\SocialRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class SocialController extends AppBaseController
{
    /** @var  SocialRepository */
    private $socialRepository;

    public function __construct(SocialRepository $socialRepo)
    {
        $this->socialRepository = $socialRepo;
    }

    /**
     * Display a listing of the Social.
     *
     * @param SocialDataTable $socialDataTable
     * @return Response
     */
    public function index(SocialDataTable $socialDataTable)
    {
        return $socialDataTable->render('templates.socials.index');
    }

    /**
     * Show the form for creating a new Social.
     *
     * @return Response
     */
    public function create()
    {
        return view('templates.socials.create');
    }

    /**
     * Store a newly created Social in storage.
     *
     * @param CreateSocialRequest $request
     *
     * @return Response
     */
    public function store(CreateSocialRequest $request)
    {
        $input = $request->all();

        $social = $this->socialRepository->create($input);

        Flash::success('Social saved successfully.');

        return redirect(route('socials.index'));
    }

    /**
     * Display the specified Social.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $social = $this->socialRepository->findWithoutFail($id);

        if (empty($social)) {
            Flash::error('Social not found');

            return redirect(route('socials.index'));
        }

        return view('templates.socials.show')->with('social', $social);
    }

    /**
     * Show the form for editing the specified Social.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $social = $this->socialRepository->findWithoutFail($id);

        if (empty($social)) {
            Flash::error('Social not found');

            return redirect(route('socials.index'));
        }

        return view('socials.edit')->with('social', $social);
    }

    /**
     * Update the specified Social in storage.
     *
     * @param  int              $id
     * @param UpdateSocialRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSocialRequest $request)
    {
        $social = $this->socialRepository->findWithoutFail($id);

        if (empty($social)) {
            Flash::error('Social not found');

            return redirect(route('socials.index'));
        }

        $social = $this->socialRepository->update($request->all(), $id);

        Flash::success('Social updated successfully.');

        return redirect(route('socials.index'));
    }

    /**
     * Remove the specified Social from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $social = $this->socialRepository->findWithoutFail($id);

        if (empty($social)) {
            Flash::error('Social not found');

            return redirect(route('socials.index'));
        }

        $this->socialRepository->delete($id);

        Flash::success('Social deleted successfully.');

        return redirect(route('socials.index'));
    }
}
