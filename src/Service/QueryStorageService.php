<?php

namespace App\Service;

use Symfony\Component\HttpKernel\KernelInterface;

class QueryStorageService
{
    private $filePath;

    public function __construct(KernelInterface $kernel)
    {
        $this->filePath = $kernel->getProjectDir() . '/var/data/queries.json';
    }

    public function saveQuery(string $queryType, string $query)
    {
        $data = $this->loadQueries();
        $data[] = ['type' => $queryType, 'query' => $query, 'timestamp' => date('Y-m-d H:i:s')];
        file_put_contents($this->filePath, json_encode($data, JSON_PRETTY_PRINT));
    }

    private function loadQueries(): array
    {
        if (!file_exists($this->filePath)) {
            return [];
        }

        $content = file_get_contents($this->filePath);
        return json_decode($content, true) ?: [];
    }
}
