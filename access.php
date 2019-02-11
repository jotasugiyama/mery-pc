<?php

class Access{
  private $img;
  private $number;
  private $title;
  private $article;
  private $name;

  public function __construct($img, $number, $title, $article, $name){
    $this->img = $img;
    $this->number = $number;
    $this->title = $title;
    $this->article = $article;
    $this->name = $name;

  }

  public function getImg(){
    return $this->img;
  }

  public function getNumber(){
    return $this->number;
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
}
