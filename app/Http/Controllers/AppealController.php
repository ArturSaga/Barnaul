<?php

namespace App\Http\Controllers;

use App\Models\Appeal;
use Illuminate\Http\Request;

class AppealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $appeals = Appeal::all();
        return view('appeals.index', ['appeals'=>$appeals]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('appeals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
//        Advert::create($request->all());
        $request->validate([
            'fio' => ['required'],
            'phone' => ['required'],
            'filial' => ['required'],
            'cause' => ['required'],
            'description' => ['required'],
        ]);

        $appeal = new Appeal();
        $appeal->fio = $request->fio;
        $appeal->phone = $request->phone;
        $appeal->filial = $request->filial;
        $appeal->cause = $request->cause;
        $appeal->description = $request->description;
        $appeal->save();

        return redirect('/appeals')->with('success', 'Обращение успешно зарегистрировано');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appeal  $appeal
     * @return \Illuminate\Http\Response
     */
    public function show(Appeal $appeal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appeal  $appeal
     * @return \Illuminate\Http\Response
     */
    public function edit(Appeal $appeal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appeal  $appeal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appeal $appeal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appeal  $appeal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appeal $appeal)
    {
        //
    }
}
