<?php

namespace App\Livewire;

use App\Models\Vendor;
use Livewire\Component;
use Livewire\Attributes\On;

class VendorSelector extends Component
{
    public $show = false;
    public $selectedType = null;
    public $vendors = [];
    public $selectedVendor = null;

    #[On('open-vendor-selection')]
    public function openModal($typeId)
    {
        $this->selectedType = $typeId;
        $this->vendors = Vendor::whereHas('items', function ($query) use ($typeId) {
            $query->where('type', $typeId);
        })->get();
        $this->show = true;
    }

    public function selectVendor($vendorId)
    {
        $vendor = Vendor::find($vendorId);
        if ($vendor) {
            $this->selectedVendor = $vendor;
            $this->dispatch('vendor-selected', [
                'type' => $this->selectedType,
                'vendor' => [
                    'id' => $vendor->id,
                    'name' => $vendor->name,
                ]
            ]);
            $this->closeModal();
        }
    }

    public function closeModal()
    {
        $this->show = false;
        $this->selectedType = null;
        $this->vendors = [];
        $this->selectedVendor = null;
    }

    public function mount()
    {
        $this->show = false;
    }

    public function render()
    {
        return view('livewire.vendor-selector');
    }
}