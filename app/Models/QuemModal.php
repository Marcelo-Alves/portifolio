<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuemModal extends Model
{
    use HasFactory;


    public function Quem(){
        $titulo="Quem Sou";
        $texto="Com mais de 20 anos de experiência na area de TI, sou formado em Tecnologia da Informação com MBA em Gestão Estratégica de TI
        pela Fundação Getúlio Vargas. A minha carreira foi desenvolvida em empresas de grande porte como Petrobras,
        Accenture e T-Systems e atualmente Locaweb. Possuo experiência na reestruturação de equipes de TI, capacidade de liderança e motivação de equipes,
        habilidade para identificar problemas complexos e implantar soluções que agregam valor aos negócios.";
        $retorno = [
            'titulo' => $titulo,
            'texto'  => $texto
        ];
        return $retorno;
    }
}
