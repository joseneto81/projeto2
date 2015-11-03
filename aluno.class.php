<?php
class Aluno{
	private $nome;
	private $acertos;
	private $peso = 2;

	public function aluno($nome='', $acertos='')
	{	
		$this->nome   = $nome;
		$this->acertos= $acertos;
	}
	
	public function getNome()
	{	
		return $this->nome;
	}

	public function setNome($nome)
	{	
		$this->nome = $nome;
	}

	public function NotaFinal()
	{
		return ($this->acertos/$this->peso);
	}

	public function setAcertos($acetos)
	{
		$this->acertos = $acertos;
	}
	public function getAcertos()
	{
		return $this->acertos;
	}

}

$a = new Aluno("Carlos",5);
echo "Aluno ".$a->getNome()." obteve nota: ".$a->NotaFinal()."\n";
?>
