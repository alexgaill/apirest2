<?php

use OpenApi\Annotations as OA;

/**
 * @OA\Schema()
 */
class Categorie {

    /**
     * @OA\Property(
     *      type="integer"
     * )
     *
     * @var id
     */
    private $id;

    /**
     * @OA\Property(
     *      type="string"
     * )
     *
     * @var [type]
     */
    private $name;

    /**
     * @OA\Property(
     *      type="string",
     *      format="date-time",
     *      nullable=true
     * )
     * 
     */
    private $createdAt;
}