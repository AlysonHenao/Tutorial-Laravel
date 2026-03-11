<?php

namespace App\Http\Controllers;

use App\Models\Demon;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DemonController extends Controller
{
    public function home(): View
    {
        $viewData = [];
        $viewData['title'] = 'Home - Demon Manager';
        return view('demon.home')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData = [];
        $viewData['title'] = 'Register Demon';
        return view('demon.create')->with('viewData', $viewData);
    }

    public function save(Request $request): RedirectResponse
    {
        Demon::validate($request);
        Demon::create($request->only(['name', 'blood_amount', 'hierarchy']));
        return redirect()->route('demon.index');
    }

    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'List Demons';
        $viewData['demons'] = Demon::orderBy('id', 'asc')->get();
        return view('demon.index')->with('viewData', $viewData);
    }

    public function stats(): View
    {
        $viewData = [];
        $viewData['title'] = 'Demon Statistics';
        $viewData['stats'] = Demon::selectRaw('hierarchy, count(*) as total')->groupBy('hierarchy')->get();
        $viewData['maxBlood'] = Demon::max('blood_amount');
        return view('demon.stats')->with('viewData', $viewData);
    }
}