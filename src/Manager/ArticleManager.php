<?php

class ArticleManager {

    private array $articles_array;

    public function __construct() {
        $this->articles_array = [
            ["id" => 1, "title" => 'article 1', 'content' => 'contenu 1'],
            ["id" => 2, "title" => 'article 2', 'content' => 'contenu 2'],
            ["id" => 3, "title" => 'article 3', 'content' => 'contenu 3'],
        ];
    }


    /**
     * Retourner tous les articles.
     */
    public function getArticles(): array {
        // Ta requete sql pour aller chercher tous les articles.
        // -> SELECT * FROM article
        // $request->execute()
        // articles_array = $request->fetchAll()
        return $this->articles_array;
    }

}