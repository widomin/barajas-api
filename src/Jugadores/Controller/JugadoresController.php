<?php
namespace App\Jugadores\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Mime\Header\Headers;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class JugadoresController
 * @package App\Jugadores\Controller
 *
 * @Route(path="/api/jugadores/")
 */
class JugadoresController
{

    public function __construct(RequestStack $requestStack)
    {
    }
    
    /**
     * @Route("hello/{name}", name="jugadores_hello", methods={"GET"})
     */
    public function hello($name): JsonResponse
    {
        $response = new JsonResponse(['mensaje' => "hola {$name}"], Response::HTTP_OK);
        $response->headers->set('Access-Control-Allow-Origin', '*');
        
        return $response;
    }
    
    /**
     * @Route("add-player/{name}", name="jugadores_add-player", methods={"GET"})
     */
    public function addPlayer($name){
        $session = $this->requestStack->getSession();
        $players = $session->get('players');
        
        $session->set('players', $players);
    }
    
    // /**
    //  * @Route("signup", name="jugadores_signup", methods={"POST"})
    //  */
    // public function signUp($user){

    //     return new JsonResponse(['user' => $user], Response::HTTP_OK);

    // }




}


?>
