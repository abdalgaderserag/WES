<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Http\Requests\StoreMediaRequest;
use App\Http\Requests\UpdateMediaRequest;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $media = Media::all();
        return response($media);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMediaRequest $request)
    {
        $media = new Media();
        $media->text = $request->text;
        $media->images = $request->images;
        $media->videos= $request->videos;
        $media->others = $request->others;
        $media->save();
        return response($media);
    }

    /**
     * Display the specified resource.
     */
    public function show(Media $media)
    {
        return response($media);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMediaRequest $request, Media $media)
    {
        $media->text = $request->text;
        $media->images = $request->images;
        $media->videos= $request->videos;
        $media->others = $request->others;
        $media->update();
        return response($media);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Media $media)
    {
        $media->delete();
        return response($media);
    }

    /**
     * TODO : add upload the files code
     */
    public function upload()
    {

    }
}
