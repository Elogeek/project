<?php

class HomeController extends Controller {

    public function index() {
        // -> manipuler le modèle (entité, manager, ... tout ce qui concerne les données).
        // -> Invoquer les managers pour obtenir de l'information
        // -> Traiter les formulaires
        // -> vérifier si un utilisateur est connecté
        // -> Manipuler une entité avant de l'envoyer au manager pour modification (pour sauvegarde)
        // -> Afficher la bonne vue
        // -> Fournir à la bonne vue, les variables éventuelles à afficher

        $this->render('index.view.php');
    }


    /**
     * Display all articles.
     */
    public function articles() {
        $manager = new ArticleManager();
        $articlesArray = $manager->getArticles();

        $articleList = [];
        foreach($articlesArray as $article) {
            $art = new Article();
            $art->setId($article['id'])
                ->setTitle($article['title'])
                ->setContent($article['content']);
            $articleList[] = $art;
        }

        $this->render('articles.view.php', $articleList);
    }
}
