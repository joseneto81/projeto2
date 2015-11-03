<?php
class Aluno{
	private $nome;

	public function aluno($nome='')
	{	
		$this->nome = $nome;
	}
	
	public function getNome()
	{	
		return $this->nome;
	}

	public function setNome($nome)
	{	
		$this->nome = $nome;
	}
}

$a = new Aluno();
$a->setNome("Carlos");
echo "Aluno ".$a->getNome()."\n";
?>
