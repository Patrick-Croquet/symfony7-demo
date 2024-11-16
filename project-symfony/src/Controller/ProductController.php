<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductController extends AbstractController
{
    #[Route('/product', name: 'product.index')]
    public function index(Request $request, ProductRepository $repository): Response
    {
        //$products = ['TV', 'Smarphone', 'Ordinateur'];
        $products = $repository->findAll();
        //dd($products);
        return $this->render('product/index.html.twig', [
            'products' => $products,
        ]);
    }
}
