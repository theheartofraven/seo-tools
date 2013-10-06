<?php
namespace DomainFinder\UseCase;

class QueryList
{
	public function __construct( $query_repository )
	{
		$this->repo = $query_repository;
	}

	public function run( $request )
	{
		return array( 'queries' => $this->repo->findAll() );
	}
}