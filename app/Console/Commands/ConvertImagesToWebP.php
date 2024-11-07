<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Buglinjo\LaravelWebp\Facades\WebP; 
use Illuminate\Support\Facades\File;
use Illuminate\Http\UploadedFile;

class ConvertImagesToWebP extends Command
{
    protected $signature = 'images:convert-webp';
    protected $description = 'Convert all images in public/images to WebP format';

    public function handle()
    {
        $directory = public_path('assets/logos');
        $files = File::files($directory);

        foreach ($files as $file) {
            $extension = strtolower($file->getExtension());

            // Check for supported image formats
            if (in_array($extension, ['jpg', 'jpeg', 'png'])) {
                try {
                    // Create an UploadedFile instance
                    $uploadedFile = new UploadedFile($file->getPathname(), $file->getFilename());

                    // Use the WebP facade to create the WebP image
                    $webpImage = WebP::make($uploadedFile);

                    // Create the destination filename and path
                    $webpFileName = pathinfo($file->getFilename(), PATHINFO_FILENAME) . '.webp';
                    $destinationPath = $directory . '/' . $webpFileName;

                    // Save the WebP image to the destination path with optional quality
                    $webpImage->save($destinationPath, 90); // Adjust quality as needed

                    $this->info("Converted: " . $file->getFilename() . " to " . $webpFileName);
                } catch (\Exception $e) {
                    $this->error("Error converting {$file->getFilename()}: " . $e->getMessage());
                }
            }
        }

        $this->info('All eligible images have been converted to WebP format.');
    }
}
