<?php
class Personne
{
	public $id;
	public $nom;
	public $prenom;

	/**
	 * * * * * * * * * * * * * * * * * * * * * * * *
	 * L'identifiant de la personne
	 * doit toujours être positif
	 * * * * * * * * * * * * * * * * * * * * * * * *
	 */
	public function get_id()
	{
		return $this->id;
	}

	public function set_id($id)
	{
		$id = str_replace(' ', '', $id);

		if ($id <= 0)
			throw new InvalidArgumentException("L'identifiant de la personne est négatif ou nul");

		$this->id = (int) $id;
	}

	/**
	 * * * * * * * * * * * * * * * * * * * * * * * *
	 * Le nom de famille de la personne
	 * doit contenir au moins deux caractères
	 * et correspondre à la regex utilisée
	 * * * * * * * * * * * * * * * * * * * * * * * *
	 */
	public function get_nom()
	{
		return $this->nom;
	}

	public function set_nom($nom)
	{
		$regex = '^([ \u00c0-\u01ffa-zA-Z\'\-])+$';
		$nom = trim($nom);

		if (strlen($nom) < 2)
			throw new InvalidArgumentException("Le nom de famille doit contenir au moins deux caractères");

		elseif ( ! preg_match($regex, $nom))
			throw new InvalidArgumentException("Le nom de famille contient des caractères illégaux");

		$this->nom = (string) $nom;
	}

	/**
	 * * * * * * * * * * * * * * * * * * * * * * * *
	 * Le prénom de la personne
	 * doit contenir au moins deux caractères
	 * et correspondre à la regex utilisée
	 * * * * * * * * * * * * * * * * * * * * * * * *
	 */
	public function get_prenom()
	{
		return $this->prenom;
	}

	public function set_prenom($prenom)
	{
		$regex = '^([ \u00c0-\u01ffa-zA-Z\'\-])+$';
		$prenom = trim($prenom);

		if (strlen($prenom) < 2)
			throw new InvalidArgumentException("Le prénom doit contenir au moins deux caractères");

		elseif ( ! preg_match($regex, $prenom))
			throw new InvalidArgumentException("Le prénom contient des caractères illégaux");

		$this->prenom = (string) $prenom;
	}
}