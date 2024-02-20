<?php

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;

interface BannerRepositoryInterface
{
    public function getAllBanners($type);

    public function getBannerById($banner);

    public function createBanner($type);

    public function updateBanner($banner, Request $request);

    public function storeBanner($type, Request $request);

    public function deleteBanner($id);
}
