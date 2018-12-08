<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PostController extends Controller
{

    /**
     * @Route("/blog", name="blog")
     */
    public function indexAction(){

        return $this->render('Fantom/Front/blog.html.twig');

    }


    /**
     * @Route("/blog/{category_id}", name="category")
     */
    public function categoryAction(){

        return $this->render('Fantom/Front/category.html.twig');

    }


    /**
     * @Route("blog/posts/{post_id}", name="post")
     */
    public function postViewAction(){

        return $this->render('Fantom/Front/post.html.twig');

    }



}
