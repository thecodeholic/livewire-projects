<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsSearch extends Component
{
    use WithPagination;


    public string $search = '';

    protected $queryString = ['search'];

    public function render()
    {
        $query = Product::query();
        if ($this->search) {
            $query->where('title', 'like', "%{$this->search}%")
                ->orWhere('description', 'like', "%{$this->search}%");
        }

        return view('livewire.products-search', [
            'products' => $query->paginate(20)
        ]);
    }

    public function updated($property)
    {
        if ($property === 'search') {
            $this->resetPage();
        }
    }
}
