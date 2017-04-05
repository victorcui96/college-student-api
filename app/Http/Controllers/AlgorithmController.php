<?php

namespace App\Http\Controllers;

use App\Algorithm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class AlgorithmController extends Controller
{
    /*
	  called when user wants to GET /algorithms
	  lists all algorithms in 'algorithms' table
	 */
    public function index() {
    	// retrieve all algorithms stored in 'algorithms' table, like a SELECT * in SQL
    	$algorithms = Algorithm::all();
    	return Response::json($algorithms);
    }
    /*
    	Called when user wants to POST to /algorithms
     */
    public function create(Request $request) {
    	// create a new album
    	Algorithm::create($request->all());
    	return Response::json(['created' => true]);

    }

    public function show ($id) {
    	// GET /algorithms/$id
    	$album = Algorithm::find($id);
    	return Response::json($album);
    }

    /*
    	Called when user wants submit a PUT (i.e update) method
     */
   public function update (Request $request, $id) {
   	  // PUT /algorithms/$id
   	  // updates a single album
   	  $album = Algorithm::find($id);
   	  $album->update($request->all());
   	  return Response::json(['updated' => true]);
   } 

   /*
 		Called when the user wants to DELETE a single album
    */
   public function destroy($id) {
	   	// DELETE /algorithms/$id
	   	// removes a single album
	   	$album = Algorithm::find($id);
	   	$album->delete();
	   	return Response::json(['deleted' => true]);
   	
	}
}