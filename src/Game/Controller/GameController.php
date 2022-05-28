<?php
namespace App\Game\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class GameController
 * @package App\Game\Controller
 *
 * @Route(path="/api/game/")
 */
class GameController
{

    public function __construct(RequestStack $requestStack)
    {
    }
    
    /**
     * @Route("hello/{name}", name="game_hello", methods={"GET"})
     */
    public function hello($name): JsonResponse
    {
        return new JsonResponse(['mensaje' => "hola {$name}"], Response::HTTP_OK);
    }
    
    /**
     * @Route("add-player/{name}", name="game_add-player", methods={"GET"})
     */
    public function addPlayer($name){
        $session = $this->requestStack->getSession();
        $players = $session->get('players');
        $session->set('players', $players);
    }
}

?>
