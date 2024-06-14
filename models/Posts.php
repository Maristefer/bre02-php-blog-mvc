<?php

class Posts
{
    private ? int $id= null;
    
    public function __construct(private string $title, private string $excerpt, private string $content, private int $author, private DateTime $createdAt)
    {
        
    }
    
    public function getId(): ? int //return int|null
    {
        return $this->id;
    }
    
    public function setId(? int $id): void
    {
        $this->id = $id;
    }
    
   public function getTitle(): string
    {
        return $this->title;
    }
    
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
    
    public function getExcerpt(): string
    {
        return $this->excerpt;
    }
    
    public function setExcerpt(string $excerpt): void
    {
        $this->excerpt = $excerpt;
    }
    
    public function getContent(): string
    {
        return $this->content;
    }
    
    public function setContent(string $content): void
    {
        $this->content = $content;
    }
    
    public function getAuthor(): int
    {
        return $this->author;
    }
    
    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }
    
     public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
}