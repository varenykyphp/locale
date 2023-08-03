<?php

namespace VarenykyLocale\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Str;
use VarenykyLocale\Models\Language;
use VarenykyLocale\Repositories\LanguageRepository;

class LanguageController extends BaseController
{
    public function __construct(LanguageRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(): View
    {
        $Lanuages = $this->repository->getAll();
        return view('varenykyLocale::languages.index', compact('Lanuages'));
    }

    public function create(): View
    {
        return view('varenykyLocale::languages.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $create = $request->except(['_token']);
        $lanuages = $this->repository->create($create);

        return redirect()->route('admin.languages.index')->with('success', __('varenyky::labels.added'));
    }

    public function edit(Language $language): View
    {
        return view('varenykyLocale::languages.edit', compact('language'));
    }

    public function update(Request $request, Language $language): RedirectResponse
    {
        $update = array_filter($request->except(['_token', '_method']));
        $this->repository->update($language->id, $update);

        return redirect()->route('admin.languages.edit', $language->id)->with('success', __('varenyky::labels.updated'));
    }

    public function destroy(Language $language): RedirectResponse
    {
        
        $language->delete();

        return redirect()->route('admin.languages.index')->with('error', __('varenyky::labels.deleted'));
    }
}
