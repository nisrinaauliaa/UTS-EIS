<?php

namespace App\Controllers;
use App\Models\PostModel;

class Post extends BaseController
{
    protected $postModel;
    public function __construct()
    {
        $this->postModel = new PostModel();
    }
    public function index()
    {
        $post = $this->postModel->findAll();
        $data =[
            'title' => 'All Posts',
            'post' => $post
        ];
        return view('post/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Buat post baru',
        ];

        return view('post/create', $data);
    }

   public function save()
   {
       if (!$this->validate([
           'caption' => 'required'
       ]))
       return redirect()->to('/post/create');
       
        $this->postModel->save([
            'foto' => $this->request->getVar('foto'),
            'caption' => $this->request->getVar('caption')
        ]);
        return redirect()->to('/post/index');
   }
}