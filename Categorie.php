<?php

require "General.php";
use OpenApi\Annotations as OA;

class Categorie extends General{
    
//    protected $table = __CLASS__;
    protected $table = "categorie";

    /**
     * @OA\Get(
     *      path="/categorie",
     *      @OA\Parameter(
     *          name="limit",
     *          in="query",
     *          required=false,
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response="200",
     *          description="Récupération des catégories",
     *          @OA\JsonContent(
     *              type="array",
     *              description="",
     *              @OA\Items(ref="#/components/schemas/Categorie")
     *          )
     *      ),
     *      @OA\Response(
     *          response="404",
     *          description="Erreur 404",
     *          @OA\JsonContent(
     *              @OA\Property(
     *                  property="message",
     *                  type="string",
     *                  example="Erreur lors de la récupération des catégories"
     *              )
     *          ),
     *      )
     * )
     */

    /**
     * @OA\Get(
     *      path="/categorie/{id}",
     *      @OA\Parameter(
     *          name="id",
     *          description="Id de la catégorie dont on souhaite récupérer les informations",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response="200",
     *          description="Récupération d'une catégorie en fonction de l'id",
     *          @OA\JsonContent(
     *              type="array",
     *              description="",
     *              @OA\Items(ref="#/components/schemas/Categorie")
     *          )
     *      )
     * )
     */
    
    /**
     * @OA\Post(
     *      path="/categorie",
     *      @OA\Response(
     *          response="200",
     *          description="Save ok",
     *          @OA\JsonContent(
     *              @OA\Property(
     *                  property="message",
     *                  type="string",
     *                  example="Données sauvegardées"
     *              )
     *          )
     *      ),
     *      @OA\RequestBody(
     *          request="save",
     *          required=true,
     *          @OA\JsonContent(
     *              @OA\Property(
     *                  property="name",
     *                  type="string",
     *                  example="catégorie n°1"
     *              ),
     *              required={"name"}
     *          )
     *      )
     * )
     */
}