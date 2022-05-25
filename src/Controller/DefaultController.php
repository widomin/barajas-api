<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class DefaultController
 * @package App\Controller
 *
 * @Route(path="/api/")
 */
class DefaultController
{

    public function __construct()
    {
    }
    
    /**
     * @Route("hello/{name}", name="hello", methods={"GET"})
     */
    public function hello($name): JsonResponse
    {

        return new JsonResponse(['mensaje' => "hola {$name}"], Response::HTTP_OK);
    }
}

?>
