<?php

//classe TSqlInstruction
//Classe que prove os metodos em comum entre todas as instrucoes
//SQL(SELECT, INSERT, DELETE e UPDATE)

abstract class TSqlInstruction {

    protected $sql; //armazena a instrucao sql
    protected $criteria; // armazena o objeto criterio
    protected $entity; //armazena a tabela do banco de dados

    //metodo setEntity()
    //define o nome da entidade (tabela) a ser manipulada pela instrucao SQL
    //parametro $entity = tabela


  final public function setEntity($entity)
    {
        $this->entity = $entity;
    }

    final   public function getEntity()
    {
        return $this->entity;
    }
    
    //Se der erro remover o parametro
    public function setCriteria()
    {
        $this->criteria = $criteria;
    }

    //metodo getInstruction()
    //declarando o como abstract obrigamos a declaracao nas classes filhas
    //uma vez que seu comportamento sera distinto em cada uma delas, configurando polimorfismo


    abstract public function getInstruction();

}

?>