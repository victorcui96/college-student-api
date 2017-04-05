<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;


class AlbumController extends Controller
{
	/*
	  called when user wants to GET /albums
	  lists all albums in 'albums' table
	 */
    public function index() {
    	// retrieve all albums stored in 'albums' table, like a SELECT * in SQL
    	$albums = Album::all();
    	return Response::json($albums);
    }
    /*
    	Called when user wants to POST to /albums
     */
    public function create(Request $request) {
    	// create a new album
    	Album::create($request->all());
    	return Response::json(['created' => true]);

    }

    public function show ($id) {
    	// GET /albums/$id
    	$album = Album::find($id);
    	return Response::json($album);
    }

    /*
    	Called when user wants submit a PUT (i.e update) method
     */
   public function update (Request $request, $id) {
   	  // PUT /albums/$id
   	  // updates a single album
   	  $album = Album::find($id);
   	  $album->update($request->all());
   	  return Response::json(['updated' => true]);
   } 

   /*
 		Called when the user wants to DELETE a single album
    */
   public function destroy($id) {
   	// DELETE /albums/$id
   	// removes a single album
   	$album = Album::find($id);
   	$album->delete();
   	return Response::json(['deleted' => true]);
   	
   }

   /*
   	  Called when user wants to DELETE a single game
    */
}
