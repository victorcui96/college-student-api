<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;


class PlayerController extends Controller
{
    /*
	  called when user wants to GET /players
	  lists all players in 'players' table
	 */
    public function index() {
    	// retrieve all players stored in 'players' table, like a SELECT * in SQL
    	$players = Player::all();
    	return Response::json($players);
    }
    /*
    	Called when user wants to POST to /players
     */
    public function create(Request $request) {
    	// create a new player
    	Player::create($request->all());
    	return Response::json(['created' => true]);

    }

    public function show ($id) {
    	// GET /players/$id
    	$player = Player::find($id);
    	return Response::json($player);
    }

    /*
    	Called when user wants submit a PUT (i.e update) method
     */
   public function update (Request $request, $id) {
   	  // PUT /players/$id
   	  // updates a single player
   	  $player = Player::find($id);
   	  $player->update($request->all());
   	  return Response::json(['updated' => true]);
   } 

   /*
 		Called when the user wants to DELETE a single player
    */
   public function destroy($id) {
   	// DELETE /players/$id
   	// removes a single player
   	$player = Player::find($id);
   	$player->delete();
   	return Response::json(['deleted' => true]);
   	
   }
}
