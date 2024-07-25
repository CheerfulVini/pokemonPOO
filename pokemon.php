<?php

class pokemon{
    public $nome;
    public $numero;
    public $tipo;
    public $sexo;
    public $tamanho;

    public $vida;
    public $velocidade;
    public $ataque;
    public $defesa;
    public $bonusDano = 0;

    public $temFolhada;
    public $temAfiarUnhas;
    public $temAtaqueRapido;
    public $temPlanomalefico;

    function folhada($dano){
        return ( ( rand(1,10) + 4 )* ($this -> ataque / 10) ) + $this -> bonusDano;
    }

    function afiarUnhas($bonus){
        $this -> bonusDano = $this -> bonusDano + 10;
    }

    function ataqueRapido($dano){
        return ( ( rand(1,10) + 4 )* ($this -> ataque / 10) ) + $this -> bonusDano;
    }

    function planoMalefico($bonus){
        $this -> bonusDano = $this -> bonusDano + 10;
    }

    function __construct($no, $nu, $ti, $se, $ta, $vi, $ve, $at, $de, $fo = false, $af = false, $ar = false, $pm = false) {
        $this->nome = $no;
        $this->numero = $nu;
        $this->tipo = $ti;
        $this->sexo = $se;
        $this->tamanho = $ta;
        $this->vida = $vi;
        $this->velocidade = $ve;
        $this->ataque = $at;
        $this->defesa = $de;
        $this->temFolhada = $fo;
        $this->temAfiarUnhas = $af;
        $this->temAtaqueRapido = $af;
        $this->temPlanomalefico = $pm;
    }
}

$sprigatito = new pokemon("Sprigatito", 906, "Grama", "Fêmea", 0.50, 40, 65, 61, 54, true, true);
$pikachu = new pokemon("Pikachu", 25, "Elétrico", "Macho", 0.45, 35, 90, 55, 40, false, false, true, true);
