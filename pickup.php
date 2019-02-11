<?php

class Pickup{
  private $img;
  private $title;
  private $article;
  private $name;
  private $view;

  public function __construct($img, $title, $article, $name, $view){
    $this->img = $img;
    $this->title = $title;
    $this->article = $article;
    $this->name = $name;
    $this->view = $view;

  }

  public function getImg(){
    return $this->img;
  }

  public function getTitle(){
    return $this->title;
  }

  public function getArticle(){
    return $this->article;
  }

  public function getName(){
    return $this->name;
  }

  public function getView(){
    return $this->view;
  }
}
