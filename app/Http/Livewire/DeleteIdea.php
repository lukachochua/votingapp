<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\Idea;
use App\Models\Vote;
use Livewire\Component;
use Illuminate\Http\Response;

class DeleteIdea extends Component
{

    public $idea;


    protected $rules = [
        'title' => 'required|min:4',
        'category'=> 'required|integer|exists:categories,id',
        'description' => 'required|min:4'
    ];

    public function mount(Idea $idea)
    {
        $this->idea = $idea;

    }

    public function deleteIdea()
    {
        // Auth
        if(auth()->guest() || auth()->user()->cannot('delete', $this->idea)) {
            abort(Response::HTTP_FORBIDDEN);
        }

        Idea::destroy($this->idea->id);

        session()->flash('success_message', 'Idea was deleted successfully!');

        return redirect(route('idea.index'));
    }

    public function render()
    {
        return view('livewire.delete-idea');
    }
}
