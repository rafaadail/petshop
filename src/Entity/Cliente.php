<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClienteRepository")
 */
class Cliente
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var
     * @ORM\Column(type="string", length=50)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=20)
     */
    private $telefone;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=130)
     */
    private $email;

    /**
     * @var object
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Endereco", inversedBy="id", cascade={"persist"})
     */
    private $endereco;

    /**
     * @var object
     * @ORM\ManyToMany(targetEntity="App\Entity\Animal", inversedBy="cliente")
     * @ORM\JoinTable(name="animal_cliente")
     */
    private $animal;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     * @return Cliente
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return string
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param string $telefone
     * @return Cliente
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Cliente
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return object
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param Endereco $endereco
     * @return Cliente
     */
    public function setEndereco(Endereco $endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    /**
     * @return object
     */
    public function getAnimal()
    {
        return $this->animal;
    }

    /**
     * @param object $animal
     * @return Cliente
     */
    public function setAnimal($animal)
    {
        $this->animal = $animal;
        return $this;
    }

}
