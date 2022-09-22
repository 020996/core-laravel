<?php

namespace App\Components;

use Intervention\Image\Facades\Image as Image;

class Functions
{
    public static function uploadVideo($file, $old = null)
    {
        $filename = time() . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('videos/'), $filename);

        if ($old) {
            @unlink(public_path('videos/' . $old));
        }

        return $filename;
    }

    public static function uploadFile($file, $old = null)
    {
        $filename = time() . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('files/'), $filename);

        if ($old) {
            @unlink(public_path('files/' . $old));
        }

        return $filename;
    }
    public static function uploadImage($file, $old = null)
    {
        if (empty($file)) {
            return null;
        }
        $filename = time() . uniqid() . '.' . $file->getClientOriginalExtension();
        $img      = Image::make($file->getRealPath());

        switch ($img->exif('Orientation')) {

            case 2:
                $img->flip();
                break;

            case 3:
                $img->rotate(180);
                break;

            case 4:
                $img->rotate(180)->flip();
                break;

            case 5:
                $img->rotate(270)->flip();
                break;

            case 6:
                $img->rotate(270);
                break;

            case 7:
                $img->rotate(90)->flip();
                break;

            case 8:
                $img->rotate(90);
                break;
        }

        if ($img->height() > 1024) {
            $img = $img->resize(null, $img->height() / 2, function ($constraint) {
                $constraint->aspectRatio();
            });
        }
        $img = $img->save(public_path('files/' . $filename));

        if ($old) {
            @unlink(public_path('files/' . $old));
        }

        return $filename;
    }
}
