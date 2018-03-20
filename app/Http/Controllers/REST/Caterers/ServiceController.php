<?php

namespace App\Http\Controllers\REST\Caterers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Data\Models\CatererService;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CatererService::paginate(15);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $to_create = $request->only([
            'caterer_id',
            'title',
            'description',
            'status'
        ]);

        return CatererService::create($to_create);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return ['data' => CatererService::find($id)];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $caterer_service = CatererService::find($id);

        $to_update = $request->only([
            'caterer_id',
            'title',
            'description',
            'status'
        ]);
        
        return ['data' => $caterer_service, 'success' => $caterer_service->update($to_update)];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $caterer_service = CatererService::find($id);
        
        return [
            'data' => null, 
            'success' => $caterer_service->delete()
        ];
    }
}
