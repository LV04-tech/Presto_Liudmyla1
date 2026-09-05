<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Intervention\Image\ImageManagerStatic as Image;

class ResizeImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $path;
    private $w;
    private $h;
    private $fileName;

    /**
     * Create a new job instance.
     */
    public function __construct($filePath, $w, $h)
    {
        $this->path = dirname($filePath);
        $this->fileName = basename($filePath);
        $this->w = $w;
        $this->h = $h;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // 1. Definiamo i percorsi assoluti per la libreria grafica
        $srcPath = storage_path("app/public/{$this->path}/{$this->fileName}");
        $destPath = storage_path("app/public/{$this->path}/crop_{$this->w}x{$this->h}_{$this->fileName}");

        // Sicurezza: Se il file originale non esiste (es. upload fallito o interrotto), ci fermiamo
        if (!file_exists($srcPath)) {
            return;
        }

        // 2. Configura Intervention Image per usare Imagick se disponibile (supporto AVIF ottimale)
        if (extension_loaded('imagick')) {
            Image::configure(['driver' => 'imagick']);
        }

        // 3. Eseguiamo il ritaglio e salviamo il nuovo file con il prefisso corretto
        Image::make($srcPath)
            ->fit($this->w, $this->h) // "fit" taglia e ridimensiona mantenendo le proporzioni
            ->save($destPath);
    }
}
