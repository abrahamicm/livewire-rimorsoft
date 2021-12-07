<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $post_id,$title,$body;
    public $view = 'create';
    public function render()
    {


        //$posts = Post::all()->sortBy('id',null,true)->paginate(10);

        $posts = Post::paginate(10);

        return view('livewire.post-component',['posts'=>$posts]);
    }
    public function destroy($id){
        Post::destroy($id);
    }
    public function store(){
        $this->validate([
            'title' =>'required',
            'body' =>'required'
        ]);

        $post =Post::create([
            'title' =>$this->title,
            'body' =>$this->body
            ]
        );
        $this->edit($post->id);
    }

    public function edit ($id){
        $post = Post::find($id);
        $this->title = $post->title;
        $this->body = $post->body;
        $this->view = 'edit';
        $this->post_id=$id;
    }

    public function default(){
        $this->title ="";
        $this->body="";
        $this->view='create';
    }

    public function update(){
        $this->validate([
            'title'=>'required',
            'body'=>'required',

        ]);
        $post= Post::find($this->post_id);
        $post->update([
            'title'=>$this->title,
            'body'=>$this->body
        ]);
    }
}
