<?php
namespace App\Core;
class View {

    private String $view;
    private String $template;

    public function __construct(String $view, String $template="back"){
        $this->setView($view);
        $this->setTemplate($template);
    }

    public function setView(String $view): void
    {
        $view = "Views/".trim($view).".view.php";
        if(!file_exists($view)){
            die("La vue ".$view." n'existe pas");
        }
        $this->view = $view;
    }
    public function setTemplate(String $template): void
    {
        $template = "Views/".trim($template).".tpl.php";
        if(!file_exists($template)){
            die("Le template ".$template." n'existe pas");
        }
        $this->template = $template;
    }

    public function __destruct(){
        include $this->template;
    }

}