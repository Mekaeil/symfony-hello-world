<?php

namespace BlogBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdminCategoryController extends Controller
{

    /**
     * @Route("category", name="admin.categories.index")
     */
    public function indexAction(){

        return $this->render("Admin/Category/index.html.twig");

    }

    /**
     * @Route("category/create", name="admin.category.create")
     */
    public function createAction(){

        $em = $this->getDoctrine()->getManager();

        $category = new Category();
        $category->setName('PHP');
        $category->setSlug('php-learning');
        $category->setDescription(null);

        $em->persist($category);

        $em->flush();

        return new Response('Create New Category Successfully');

    }
}
