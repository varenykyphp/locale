<?php

namespace Varenyky\Http\Controllers;

use Illuminate\View\View;
use Varenyky\Models\Country\Country;

class CountryController extends BaseController
{

    public function index(): View
    {
        $Lanuages = Country::all();
        return view('varenyky::menus.index', compact('Lanuage'));
    }

    public function create(): View
    {
        return view('varenyky::menus.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $create = $request->except(['_token']);
        $create['slug'] = Str::slug($create['name']);

        $menus = $this->repository->create($create);

        return redirect()->route('admin.menus.index')->with('success', __('varenyky::labels.added'));
    }

    public function edit(Menu $menu): View
    {
        return view('varenyky::menus.edit', compact('menu'));
    }

    public function update(Request $request, Menu $menu): RedirectResponse
    {
        $update = array_filter($request->except(['_token', '_method']));
        $this->repository->update($menu->id, $update);

        return redirect()->route('admin.menus.edit', $menu->id)->with('success', __('varenyky::labels.updated'));
    }

    public function destroy(Menu $menu): RedirectResponse
    {
        $menuItem = MenuItem::where('menu_id',$menu->id)->get();
        foreach( $menuItem  as $item){
            $item->delete();
        }
        
        $menu->delete();

        return redirect()->route('admin.menus.index')->with('error', __('varenyky::labels.deleted'));
    }
}
