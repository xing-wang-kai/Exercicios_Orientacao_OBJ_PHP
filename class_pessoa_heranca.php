<?php

class Pessoa{
    private $nome;
    private $idade;
    private $sexo;
    
    public function fazeraniv(){
        $this -> get_idade() + 1;
    }
    
    public function __construct($nome, $idade, $sexo){
        $this -> set_nome($nome);
        $this -> set_idade($idade);
        $this -> set_sexo($sexo);
    }
    //get methods
    private function get_nome(){
       return $this -> nome;
    }
    private function get_idade(){
        return $this -> idade;
    }
    private function get_sexo(){
        return $this -> sexo;
    }
    //set methods
    
    private function set_nome($nome){
        $this -> nome = $nome;
    }
    private function set_idade($idade){
        $this -> idade = $idade;
    }
    private function set_sexo($sexo){
        $this -> sexo = $sexo;
    }
}
