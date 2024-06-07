<?php

namespace App\Service;

use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;

class QueryLogger
{
    private $filesystem;
    private $filePath;

    public function __construct(string $projectDir)
    {
        $this->filesystem = new Filesystem();
        $this->filePath = $projectDir . '/var/data/queries.json';
    }

    public function logQuery(string $queryType, string $query)
    {
        try {
            if (!$this->filesystem->exists($this->filePath)) {
                $this->filesystem->dumpFile($this->filePath, json_encode([]));
            }

            $data = json_decode(file_get_contents($this->filePath), true);
            $data[] = [
                'type' => $queryType,
                'query' => $query,
                'timestamp' => (new \DateTime())->format('Y-m-d H:i:s')
            ];

            $this->filesystem->dumpFile($this->filePath, json_encode($data, JSON_PRETTY_PRINT));
        } catch (IOExceptionInterface $exception) {
            // Handle exception if needed
        }
    }
}
