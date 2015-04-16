<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model {

	/**
	 * Returns the path to an artists self portrait image
	 * @return string PathToImage
	 */
	public function getSelfPortraitPath() {
		$artistLowercase = strtolower($this->name);
		$artist_name = implode('-', explode(' ', $artistLowercase));
		return 'images/' . $artist_name . '/selfportrait.jpg';
	}

}