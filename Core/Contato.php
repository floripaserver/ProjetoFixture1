<?php

require_once 'Email.php';

class Contato
{

    private $nome;
    private $email;
    private $assunto;
    private $menssagem;

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $menssagem
     */
    public function setMenssagem($menssagem)
    {
        $this->menssagem = $menssagem;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMenssagem()
    {
        return $this->menssagem;
    }

    /**
     * @param mixed $assunto
     */
    public function setAssunto($assunto)
    {
        $this->assunto = $assunto;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAssunto()
    {
        return $this->assunto;
    }

    public function enviarEmail()
    {
        $e = new Email();

        $e->remetenteNome = $this->nome;
        $e->remetenteEmail = $this->email;
        $e->assuntoEmail = $this->assunto;
        $e->conteudoEmail = $this->menssagem;

        return $e->enviar();
    }

} 