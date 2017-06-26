<?php

namespace Bike\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class IndexController extends AbstractController
{

    public function indexAction(Request $request, Response $response)
    {
		$args = array('name' => "leesin");
        return $this->view->render('index.html',$args);
    }

    public function getAdminAction(Request $request, Response $response)
    {
    	$rs = $this->db->admin()->select('*');
        // $adminlist = $rs->toArray();
        // print_r($rs);die;
        $data = ['age'=>'ss'];
        return $this->renderer->render($response, 'Index/index.html',$data);
    	
    	// return $this->renderer->render($response, 'adminlist.html',$admins);
    }




}
