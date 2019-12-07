<?php
  require __DIR__ . "/vendor/autoload.php";

  use CoffeeCode\Router\Router;

  $router = new Router(URL_BASE);

  /*
  *Controllers
  */
  $router->namespace("Source\Controllers");

  /*
  * Web
  * home
  */
  $router->group(null);
  $router->get("/", "Web:home");
  $router->get("/{filter}", "web:home");
  $router->get("/contato", "web:contact");

  /*
  * blog
  */
  $router->group("blog");
  $router->get("/", "Web:blog");
  $router->get("/{post_url}", "web:post");
  $router->get("/categoria/{cat_url}", "web:category");

  /*
  * contato
  */
  $router->group("contato");
  $router->get("/", "Web:contact");
  $router->post("/", "web:contact");
  $router->delete("/", "web:contact");
  $router->get("/{sector}", "web:contact");

  /*
  * ADMIN
  * home
  */
  $router->group("admin");
  $router->get("/", "Admin:home");

  /*
  * ERRORS
  */
  $router->group("ooops");
  $router->get("/{errcode}", "web:error");

  $router->dispatch();

  if ($router->error()):
    $router->redirect("/ooops/{$router->error()}");
  endif;
?>