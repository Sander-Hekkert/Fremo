<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Module;
use App\Models\Stationweg;

class ModuleList extends Component
{
    public $project_id;
    public $selectedModules = [];

    public function mount($project_id, $selectedModules)
    {
        $this->project_id = $project_id;
        $this->selectedModules = $selectedModules;
    }

    public function addModule($module_id)
    {
        $module = Module::find($module_id);

        // Save to the database (you might want to adjust this based on your needs)
        Stationweg::create([
            'project_id' => $this->project_id,
            'module_id' => $module_id,
            'module_naam' => $module->naam
        ]);

        // Update the selectedModules array
        $this->selectedModules[] = $module_id;

        $this->emit('moduleAdded', ['module_id' => $module_id, 'module_naam' => $module->naam]);
    }
    
    public function render()
    {
        $modules = Module::all();
        return view('livewire.module-list', compact('modules'));
    }
}
