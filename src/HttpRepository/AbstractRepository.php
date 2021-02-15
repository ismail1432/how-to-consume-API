<?php

namespace App\HttpRepository;

use App\Hydra\ApiCollection;
use App\Model\Author;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

abstract class AbstractRepository
{
    private $client;
    private $serializer;

    public function __construct(HttpClientInterface $client, SerializerInterface $serializer)
    {
        $this->client = $client;
        $this->serializer = $serializer;
    }

    public function findBy(string $path): ApiCollection
    {
        $response = $this->client->request('GET', $path);

        return $this->serializer->deserialize(
                $response->getContent(),
            ApiCollection::class, 'json',
                    [
                        'items_models' => $this->getModel()
                    ]
        );
    }

    abstract public function getModel(): string;
}