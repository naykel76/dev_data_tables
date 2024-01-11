<?php

namespace App\Livewire\Traits;

trait Searchable
{
    public string $search = '';

    /**
     * This function is called when the search is updated. It resets the
     * pagination to first page.
     */
    public function updatingSearch(): void
    {
        $this->gotoPage(1);
    }

    /**
     * Apply the search to a query.
     */
    protected function applySearch($query)
    {
        return $this->search === ''
            ? $query
            : $query
            ->where('number', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' . $this->search . '%');
    }
}
