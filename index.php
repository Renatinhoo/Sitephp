<?php

    /*class Pessoa{
        public $nome = "Xx_Thayx_xX";
        public $endereço = "Rua japichaua, 450";
        public $telefone = "11 9585566376";
    }

 $temp = new Pessoa();

 echo "Nome:" . $temp->nome .  "<br>";
 echo "endereço:" . $temp->endereço . "<br>";
 echo "telefone:" . $temp->telefone . "<br>"; */

class Pessoa
{
    private $nome;
    private $endereço;
    private $bairro;
    private $cep;

    public function setNome($nome){
    $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }
    
    public function setEndereço($endereço){
        $this->endereço = $endereço;
        }
    
        public function getEndereço(){
            return $this->endereço;
        }

        public function setBairro($bairro){
            $this->bairro = $bairro;
            }
        
            public function getBairro(){
                return $this->bairro;
            }

            public function setCep($cep){
                $this->cep = $cep;
                }
            
                public function getCep(){
                    return $this->cep;
                }
}

$temp = new Pessoa();
$temp->setNome("<h2> Bacana Da silva mens <br>");
echo $temp->getNome();

$temp->setEndereço("<h2> Rua dos bacanas, 669 <br>");
echo $temp->getEndereço();

$temp->setBairro("<h2> Bacanas carvalho <br>");
echo $temp->getBairro();

$temp->setCep("<h2> 04242424 <br>");
echo $temp->getCep();


?>