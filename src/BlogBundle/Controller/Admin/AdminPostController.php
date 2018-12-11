<?php

namespace BlogBundle\Controller\Admin;

use BlogBundle\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\BrowserKit\Response;

class AdminPostController extends Controller
{

    /**
     * @Route("post", name="admin.posts.index")
     */
    public function indexAction(){

        return $this->render("Admin/Post/index.html.twig");

    }

    /**
     * @Route("post/create", name="admin.post.create")
     */
    public function createAction(){

        $em = $this->getDoctrine()->getManager();

        $post = new Post();
        $post->setTitle('Hello Michaeil');
        $post->setSlug('hello-michaeil');
        $post->setBody('This is the first recordign in DB with Symfony');

        $em->persist($post);

        $em->flush();

        return new Response('Created New Post successfully');

    }




}
