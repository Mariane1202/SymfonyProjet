<?php

namespace App\Controller;

use App\Form\ProductType;
use App\Entity\Product;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{

    // #[Route(path: '/product', name: 'app_product')]
    // public function liste(ProductRepository $ProductOrderRepository):Response 
    // {
    //    $products=$ProductOrderRepository->findAll();
      
    //   return $this->render('product/index.html.twig',[
    //       'products'=>$products
    //   ]);
     

    // }
       
    


    #[Route('/product', name: 'app_product',methods:['GET','POST'])]
    public function index(Request $request,EntityManagerInterface $manager,
    ProductRepository $ProductOrderRepository
    ): Response
    {
        //['products'=>$IdRepository->findBy([],['id'=>'asc'])];
        $product=new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handLeRequest($request);
        if($form->isSubmitted()&& $form->isValid())
        {
           $product=$form->getData();
           $manager->persist($product);
           $manager->flush();

           return $this->redirectToRoute('app_product');
    
        }
        $products=$ProductOrderRepository->findAll();
        return $this->render('product/index.html.twig',
        ['form'=>$form->createView(), 'products'=>$products
        ]);
            
      


        
    }

    
}
