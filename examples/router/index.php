<?php
  require __DIR__ . "/vendor/autoload.php";

  use CoffeeCode\Router\Router;

  $router = new Router(URL_BASE);

  // Definindo qual grupo de URL utilizarL
  $router->group(null);
  $router->get("/", function ($data){
    echo "<h1>Olá Mundo</h1>";
    var_dump($data);
  });
  // Casso eu passe uma URL com um /contato não é retornado um erro
  $router->get("/contato", function ($data){
    echo "<h1>Contato!</h1>";
    var_dump($data);
  });

  // Caso um grupo de URL não seja os permitidos, é retornado um erro
  $router->group("ops");
  $router->get("/{errcode}", function ($data){
    echo "<h1>Erro {$data["errcode"]}</h1>";
    var_dump($data);
  });

  // Irá fazer toda a leitura de rota, e rodar o comando que deseja
  $router->dispatch();

  // Retorna um erro
  if ($router->error()):
    $router->redirect("/ops/{$router->error()}");
  endif;
?>