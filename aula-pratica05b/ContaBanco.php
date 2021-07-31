<?php

class ContaBanco
{
    // Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    // Métodos
    public function abrirConta($tipo)
    {
        $this->setTipo($tipo);
        $this->setStatus(true);

        if ($tipo == "CC") {
            $this->setSaldo(50);
        } elseif ($tipo == "CP") {
            $this->setSaldo(150);
        }
    }

    public function fecharConta()
    {
        if ($this->getSaldo() > 0) {
            echo "<p>ERRO! Conta com dinheiro, o senhor não pode fechar ainda. Primeiro saque seu dinheiro</p>";
        } elseif ($this->getSaldo() < 0) {
            echo "<p>ERRO! Conta em débito com o banco... Impossível encerrar!</p>";
        } else {
            $this->setStatus(false);
            echo "<p>{$this->getDono()}, sua conta foi fechada com sucesso!</p>";
        }
    }

    public function depositar($valor)
    {
        if ($this->getStatus() == true) {
            $this->setSaldo($this->getSaldo() + $valor);
            echo "<p>Depósito de R$$valor autorizado na conta de {$this->getDono()}!</p>";
        } else {
            echo "<p>ERRO! Impossível depositar, esta conta não está ativa!</p>";
        }
    }

    public function sacar($valor)
    {
        if ($this->getStatus() == true) {
            if ($this->getSaldo() >= $valor) {
                $this->setSaldo($this->getSaldo() - $valor);
                echo "<p>Saque de R$$valor autorizado na conta de {$this->getDono()}!</p>";
            } else {
                echo "<p>ERRO! Saldo insuficiente, Impossível sacar!";
            }
        } else {
            echo "<p>ERRO! Impossível sacar, esta conta não está ativa!</p>";
        }
    }

    public function pagarMensalidade()
    {
        if ($this->getTipo() == "CC") {
            $valor = 12;
        } elseif ($this->getTipo() == "CP") {
            $valor = 20;
        }

        if ($this->getStatus() == true) {
            $this->setSaldo($this->getSaldo() - $valor);
            echo "<p>Mensalidade de R$$valor debitada da conta de {$this->getDono()}</p>";
        } else {
            echo "<p>ERRO! Problemas com a conta, não posso cobrar...</p>";
        }
    }

    // Métodos Especiais

    public function ContaBanco()
    {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta criada com sucesso!</p>";
    }

    public function getNumConta()
    {
        return $this->numConta;
    }
    public function setNumConta($numConta)
    {
        $this->numConta = $numConta;
    }

    public function getTipo()
    {
        return $this->tipo;
    }
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function getDono()
    {
        return $this->dono;
    }
    public function setDono($dono)
    {
        $this->dono = $dono;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    public function getStatus()
    {
        return $this->status;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }
}
