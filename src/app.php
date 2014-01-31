<?php
 
use Symfony\Component\Routing;
 
$routes = new Routing\RouteCollection();
/*
// Example of adding a function name for the controller.
$routes->add('hello', new Routing\Route('/hello/{name}', array(
    'name' => 'World',
    '_controller' => 'render_template',
)));
*/
$routes->add('hello', new Routing\Route('/hello/{name}', array(
    'name' => 'World',
    '_controller' => function ($request) {
        return render_template($request);
    }
)));
/*
// Example of setting attributes and headers in an anonymous controller function.
$routes->add('hello', new Routing\Route('/hello/{name}', array(
    'name' => 'World',
    '_controller' => function ($request) {
        // $foo will be available in the template
        $request->attributes->set('foo', 'bar');
 
        $response = render_template($request);
 
        // change some header
        $response->headers->set('Content-Type', 'text/plain');
 
        return $response;
    }
)));
*/
$routes->add('bye', new Routing\Route('/bye', array('_controller' => 'render_template')));
 
return $routes;