<?php
namespace Staditek\App\Core;

class Router
{
    public static $routes = [];

    public static function addRoute($method, $path, $controller, $function, $middleware = [])
    {
        self::$routes[] = [
            'method'=> $method,
            'path'=> $path,
            'controller'=> $controller,
            'function'=> $function,
            'middleware'=> $middleware
        ];
    }
    public static function run()
    {
        $path = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/';
        $method = $_SERVER['REQUEST_METHOD'];

        foreach(self::$routes as $route){
            $pattern  = "@^" . preg_replace('/\\\:[a-zA-Z0-9\_\-]+/','([a-zA-Z0-9\-\_]+)', preg_quote($route['path'])).'$@D';
            // die(var_dump(preg_match_all($pattern, $path, $variables)));
            if(preg_match_all($pattern, $path, $variables) && $method == $route['method']){
                $function = $route['function'];
                $controller = new $route['controller'];

                if(is_object($controller) && method_exists($controller, $function)){
                    $parameters = [];
                    unset($variables[0]); //remove first param
                    foreach($variables as $var){
                        $parameters[] = array_shift($var);
                    }

                    call_user_func_array([$controller, $function], $parameters);
                }

                else {
                    http_response_code(404);
                    echo '<h1>Not Found!</h1>';
                }
    
            }
            
        }
    }
}