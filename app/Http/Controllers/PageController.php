<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class PageController extends Controller
{

    private function imageGalleryCollection()
    {
        $bigImages = File::files(public_path("/assets/images/gallery"));
        $smallImages = File::files(public_path("/assets/images/gallery/thumbnails"));

        return collect($bigImages)->map(function ($bigImage) use ($smallImages) {
            $filename = $bigImage->getFilename();
            $smallImage = collect($smallImages)->first(function ($smallImage) use ($filename) {
                return $smallImage->getFilename() === $filename;
            });

            return [
                'thumbnail' => $smallImage ? asset(str_replace(public_path(), '', $smallImage->getPathname())) : null,
                'full' => asset(str_replace(public_path(), '', $bigImage->getPathname())),
            ];
        })->shuffle()->toArray();
    }

    public function home()
    {
        return view('pages.home.index');
    }
    public function villa()
    {
        return view('pages.villa.index');
    }
    public function gallery()
    {


        $images = $this->imageGalleryCollection();

        return view('pages.gallery.index',['images'=>$images]);
    }
    public function contact()
    {
        return view('pages.contact.index');
    }
    public function privacyPolicy()
    {
        return view('pages.privacy_policy');
    }
    public function regulations()
    {
        return view('pages.regulations');
    }
}
