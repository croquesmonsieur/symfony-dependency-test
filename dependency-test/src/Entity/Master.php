<?php

namespace App\Entity;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use App\Repository\MasterRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MasterRepository::class)
 */
class Master
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $message;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function logging ( string $message): Logger
    {
        $logger = new Logger('Message_Logging');
        $logger->pushHandler(new StreamHandler('log_files/info.log', Logger::INFO));
        $logger->info('First message received!');
    }

}
