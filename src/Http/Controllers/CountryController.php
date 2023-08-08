<?php

namespace VarenykyLocale\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Str;
use VarenykyLocale\Models\Country;
use VarenykyLocale\Repositories\CountryRepository;
use Varenyky\Http\Controllers\BaseController;

class CountryController extends BaseController
{
    public function __construct(CountryRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(): View
    {
        $countries = $this->repository->getAll();
        return view('varenykyLocale::countries.index', compact('countries'));
    }

    public function create(): View
    {
        return view('varenykyLocale::countries.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $create = $request->except(['_token']);
        $Country = $this->repository->create($create);

        return redirect()->route('admin.countries.index')->with('success', __('varenyky::labels.added'));
    }

    public function edit(Country $country): View
    {
        return view('varenykyLocale::countries.edit', compact('country'));
    }

    public function update(Request $request, Country $country): RedirectResponse
    {
        $update = array_filter($request->except(['_token', '_method']));
        $this->repository->update($country->id, $update);

        return redirect()->route('admin.countries.edit', $country->id)->with('success', __('varenyky::labels.updated'));
    }

    public function destroy(Country $country): RedirectResponse
    {
        $country->delete();

        return redirect()->route('admin.countries.index')->with('error', __('varenyky::labels.deleted'));
    }
}
