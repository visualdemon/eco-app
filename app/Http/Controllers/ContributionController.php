<?php

namespace App\Http\Controllers;

use App\Models\Contribution;
use Illuminate\Http\Request;

/**
 * Class ContributionController
 * @package App\Http\Controllers
 */
class ContributionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contributions = Contribution::paginate();

        return view('contribution.index', compact('contributions'))
            ->with('i', (request()->input('page', 1) - 1) * $contributions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contribution = new Contribution();
        return view('contribution.create', compact('contribution'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Contribution::$rules);

        $contribution = Contribution::create($request->all());

        return redirect()->route('contributions.index')
            ->with('success', 'Contribution created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contribution = Contribution::find($id);

        return view('contribution.show', compact('contribution'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contribution = Contribution::find($id);

        return view('contribution.edit', compact('contribution'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Contribution $contribution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contribution $contribution)
    {
        request()->validate(Contribution::$rules);

        $contribution->update($request->all());

        return redirect()->route('contributions.index')
            ->with('success', 'Contribution updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $contribution = Contribution::find($id)->delete();

        return redirect()->route('contributions.index')
            ->with('success', 'Contribution deleted successfully');
    }
}
