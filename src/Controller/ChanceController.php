<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChanceController
{
    // la route vers ce controller est définie dans config/routes.yaml
    public function getNumber() {
        $number = rand(0,100);
        return new Response("
        <html>
        <body>
        <div>Le numéro de la chance est $number</div>
        </body>
        </html>") ;
    }

    /**
     * @Route(path="/chance/analyse", name="chance_analyse")
     */
    public function analyseRequete(Request $requete)
    {
        dump($requete);
        
        return new Response("
        <html>
        <body>
        <div>Contenu de la requête dans le dump</div>
        <form method=\"POST\" action=\"/requete-post\">
            <input type=\"text\" value=\"Katia\" name=\"prenom\">
            <input type=\"submit\">
        </form>
        </body>
        </html>
        ");
    }
}
