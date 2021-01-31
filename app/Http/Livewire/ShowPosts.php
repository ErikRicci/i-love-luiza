<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ShowPosts extends Component
{
    public $search_id;
    public $reason;

    public function render()
    {
        return view('livewire.show-posts');
    }

    public function mount()
    {
        $this->search_id = '';
    }

    public function search()
    {
        $id = $this->search_id;

        $reason = DB::table('reasons')->find($id);

        if (!$reason)
            $this->reason = 'NOT_FOUND';
        else
            $this->reason = $reason->reason;
    }
}
