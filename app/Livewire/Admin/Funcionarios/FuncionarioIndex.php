<?php

namespace App\Livewire\Admin\Funcionarios;

use App\Models\Funcionario;
use Livewire\Component;

class FuncionarioIndex extends Component
{
    public function render()
    {
        $funcionario = Funcionario::all();
        return view('livewire.admin.funcionarios.funcionario-index', compact('funcionario'));
    }
}
