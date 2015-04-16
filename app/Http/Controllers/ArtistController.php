<?php namespace App\Http\Controllers;

use App;

class ArtistController extends Controller {

	public function __construct() {

	}

	/**
	 * Shows the main page
	 * @return void
	 */
	public function index() {
		
	}

	/**
	 * Shows the user the profile of an artist
	 * @param  string $artist Artist name lowercase seperated by hyphens
	 * @return view
	 */
	public function showProfile($artist) {
		$artist_words = explode('-', $artist);

		$artist_name = "";
		foreach ($artist_words as $word) {
			if ($word != 'van') {
				$artist_name .= ucfirst($word);
			} else {
				$artist_name .= $word;
			}
			$artist_name .= " ";
		}

		$artist = App\Artist::where('name', $artist_name)->firstOrFail();

		if ($artist->description == "") {
			$artist->description = "This artist doesn't have a description.";
		}

		return view('artist/showProfile', [
			'artist' => $artist
		]);
	}

}