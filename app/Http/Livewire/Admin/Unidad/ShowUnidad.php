<?php

namespace App\Http\Livewire\Admin\Unidad;

use App\Models\Integrante;
use App\Models\Unidad;
use Livewire\Component;

class ShowUnidad extends Component
{
	public Unidad $unidad;

	// public Integrante $integrante;

	public $openAsignar = false;
	// public $openDestroy = false;

	protected $listeners = ['render'];

	public function render()
	{
		return view('livewire.admin.unidad.show-unidad');
	}

	// public function destroy(Integrante $integrante)
	// {
	// 	$this->integrante = $integrante;
	// 	$this->openDestroy = true;
	// }

	// public function remove()
	// {
	// 	$this->integrante->delete();

	// 	$this->reset('openDestroy');

	// 	$this->emitTo('unidad.show-unidad', 'render');
	// 	$this->emit('alert', 'El integrante fue removido satisfactoriamente');
	// }
}
