<!-- 

namespace App\Http\Livewire;
use App\Models\Prv;

use Livewire\Component;

class PrvsComponent extends Component
{
    public function render()
    {
        $prvs = Prv::all();
        return view('livewire.prvscomponent',['prvs'=>$prvs])->layout('layouts.base');
    }
} -->
