<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class ResizeImage implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    private $w, $h, $fileName, $path;
    public function __construct( $fileName,$w, $h,)
    {
        $this->w = $w;
        $this->h = $h;
        $this->fileName = baseName($filePath);
        $this->path = dirname($filePath);
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $w = $this->w;
        $h = $this->h;
    }
}
