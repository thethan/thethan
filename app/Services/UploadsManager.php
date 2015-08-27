<?php

namespace App\Services;

use Carbon\Carbon;
use Dflydev\ApacheMimeTypes\PhpRepository;
use Illuminate\Support\Facades\Storage;


class UploadsManager
{
    protected $disk;
    protected $mimeDetect;

    public function __construct(PhpRepository $mimeDetect)
    {
        $this->disk = Storage::disk(config('blog.uploads.storage'));
        $this->mimeDetect = $mimeDetect;
    }
    /**
     * Return Directory and files from within a folder
     *
     * @param string $folder
     * @return array of [
     *          'folder' => 'path to current',
     *          'foldername'=>'name of just the folder',
     *          'breadcrumbs'=> breadcrumb array of [$path => $foldername'],
     *          'folders' => array of [ $path => $foldername],
     *          'files' => array of file details on each file within a folder
     * ]
     */
    public function folderInfo($folder)
    {
        $folder = $this->cleanFolder($folder);
        $breadcrumbs = $this->breadcrumbs($folder);

        $slice = array_slice($breadcrumbs, -1);
        $folderName = current($slice);
        $breadcrumbs = array_slice($breadcrumbs, 0, -1);

        $subfolders = [];
        foreach(array_unique($this->disk->directories($folder)) as $subfolder){
            $subfolders["/$subfolder"] = basename($subfolder);
        }

        $files = [];
        foreach($this->disk->files($folder) as $path){
            $files[] = $this->fileDetails($path);
        }

        return compact(
            'folder',
            'folderName',
            'breadcrumbs',
            'subfolders',
            'files'
        );
    }

    /**
     * Santitize the Foldername
     */
    protected function cleanFolder($folder)
    {
        return '/'.trim(str_replace('..','',$folder).'/');
    }

    /**
     * Return breadcrumbs to the current folder
     */
    protected function breadcrumbs($folder)
    {
        $folder = trim($folder, '/');
        $crumbs['/'] = '/';

        if(empty($folder)){
            return $crumbs;
        }

        $folders = explode('/', $folder);
        $build = '';
        foreach($folders as $folder)
        {
            $build .= '/'.$folder;
            $crumbs[$build] = $folder;
        }

        return $crumbs;
    }

    /**
     * Return an array of detail files
     */
    protected function fileDetails($path)
    {
        $path = '/'.ltrim($path.'/');

        return [
            'name' => basename($path),
            'fullpath' => $path,
            'webPath' => $this->fileWebpath($path),
            'mimeType' => $this->fileMimeType($path),
            'size' => $this->fileSize($path),
            'modified' => $this->fileModified($path),
        ];
    }

    /**
     * Return the URL of to the file
     *
     * @param $path
     * @return string
     */
    public function fileWebpath($path)
    {
        $path = rtrim(config('blog.uplaod.webpath'), '/') . '/uploads/'. ltrim($path, '/');
        return url($path);
    }

    /**
     * Return the mimeType of a file
     * @param $path
     * @return null|string
     */
    public function fileMimeType($path)
    {
        return $this->mimeDetect->findType(pathInfo($path, PATHINFO_EXTENSION));
    }

    /**
     * Return the size of a file
     *
     * @param $path
     * @return mixed
     */
    public function fileSize($path)
    {
        return $this->disk->size($path);
    }

    /**
     * Return the last date file was changed
     * @param $path
     * @return static
     */
    public function fileModified($path)
    {
        return Carbon::createFromTimestamp(
            $this->disk->lastModified($path)
        );
    }

    /**
     * Creates a new directory
     * @param $folder
     */
    public function createDirectory($folder)
    {
        $folder = $this->cleanFolder($folder);

        if($this->disk->exists($folder)){
            return "Folder '$folder' already exists.";
        }

        return $this->disk->makeDirectory($folder);
    }

    /**
     * Delete a directory
     * @param $folder
     */
    public function deleteDirectory($folder)
    {
        $folder = $this->cleanFolder($folder);
        $fileFolders = array_merge(
            $this->disk->directories($folder),
            $this->disk->files($folder)
        );
        if(!empty($fileFolders)){
            return "Directory must be empty to delete it";
        }
        return $this->disk->deleteDirectory($folder);
    }

    public function deleteFile($path)
    {
        $path = $this->cleanFolder($path);

        if(!$this->disk->exists($path)){
            return "File does not exist";
        }

        return $this->disk->delete($path);

    }

    public function saveFile($path, $content)
    {
        $path = $this->cleanFolder($path);
        if($this->disk->exists($path)){
            return "File already exists";
        }

        return $this->disk->put($path, $content);
    }
}