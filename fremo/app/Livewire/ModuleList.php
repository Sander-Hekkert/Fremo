<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Module;

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
    
            // Save to the database
            // Assuming you have a Stationweg model and a proper migration
            // Replace 'your_project_id' and 'your_module_id' with the actual database columns
            // Stationweg::create(['project_id' => 'your_project_id', 'module_id' => 'your_module_id', 'module_naam' => $module->naam]);
    
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

