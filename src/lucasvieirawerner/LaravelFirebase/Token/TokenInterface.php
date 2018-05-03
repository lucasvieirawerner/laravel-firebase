<?php namespace lucasvieirawerner\LaravelFirebase;

interface TokenInterface {

	# Properties
	const FIREBASE_GENERAL = 403;
	const INVALID_OPTION = 500;

	# Methods
	function __construct($secret);
	function create(Array $data, Array $options = null);

}
