<?php
class Video{
  private $url;
  private $title;
  private $youtube;
  private $article;

  public function __construct($url, $title, $youtube, $article){
    $this->url= $url;
    $this->title= $title;
    $this->youtube= $youtube;
    $this->article= $article;
  }

  public function getUrl(){
    return $this->url;
  }

  public function getTitle(){
    return $this->title;
  }

  public function getYoutube(){
    return $this->youtube;
  }

  public function getArticle(){
    return $this->article;
  }
}
