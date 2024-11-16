<?php

namespace App\Controller;

use App\Repository\RecipeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RecipeController extends AbstractController
{
    #[Route('/recettes', name: 'recipe.index')]
    public function index(Request $request, RecipeRepository $repository): Response
    {
        $recipes = $repository->findAll();
        dd($recipes);
        //return new Response('Recettes');
        //return $this->render('recipe/index.html.twig');
    }   
    #[Route('/recettes/{slug}-{id}', name: 'recipe.show', requirements: ['id' => '\d+', 'slug' => '[a-z0-9-]+'])]
    public function show(Request $request, string $slug, int $id): Response
    {
        //dd($request->attributes->get('slug'), $request->attributes->getInt('id'));
        //dd($slug, $id);
        //return new Response('Recette : ' . $slug);

        /*return new JsonResponse(
            [
                'slug' => $slug
            ]);

        return $this->json(
            [
                'slug' => $slug,
                'id' => $id
            ]);*/

        return $this->render('recipe/show.html.twig', [
            'slug' => $slug,
            'demo' => '<strong>Plat du jour</strong>',
            'person' => [
                'firstname' => 'john',
                'lastname' => 'Doe'
            ],
            'id' => $id
        ]);
        
    }    
}
