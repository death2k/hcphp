<?php
// Your code here!
// php orientado a objetos 
// objetos (loja)

// definir o que precisa para construir (Classe -> Objeto )
// objeto é uma instancia de uma classe ..

/**
 * 
 */
class Fabricante {
    
    private $nome;
    
    public function __construct($nome){
        $this->nome = $nome;
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    
}
class Produto
{
    
    private $descricao;
    private $preco; 
    private $fabricante;
    
    //metodo construtor construtora da classe, toda vez q cria um newproduto
    // Todo o get pode ser incluso aqui no constructor 
    
    public function __construct($descricao, $preco, Fabricante $fabricante){
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->fabricante = $fabricante;
    
    }
    
    
    public function getDetalhes(){
        return "O Produto {$this->descricao} custa {$this->preco} reais. Fabricante: {$this->fabricante->getNome()}";
    }
    
// Fabricante: {$this->fabricante->getNome() = relacionamentos 
}

/*
$p1 = new Produto; 
$p1->descricao = 'Livro';
$p1->preco = 50;

var_dump($p1);

echo $p1->getDetalhes();
*/
// metodos 
// tudo q for public pode ser acessado de outros lugares .. 
// private (so pode ser acessado de dentro da classe )
// protected (dentro da classe ou herdado )
$f1 = new Fabricante('Editora B');
$p1 = new Produto('Livro', 50, $f1);
//var_dump($p1);

//$p1->setDescricao('Livro');
//$p1->setPreco(50);

echo $p1->getDetalhes();

//metodo construtor


?>
