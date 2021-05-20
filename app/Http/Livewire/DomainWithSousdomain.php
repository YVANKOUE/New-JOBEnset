<?php

namespace App\Http\Livewire;

use App\Models\domain;
use App\Models\Sousdomain;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class DomainWithSousdomain extends Component
{
    public $domains;
    public $sous_domains;

    // public domain
    public $selectedDomain = null;
    // public sous_domain
    public $selectedSousdomain = null;

    public function mount()
    {
        $this->domains = domain::all();
        $this->sous_domains = collect();
    }
    public function render()
    {
        return view('livewire.domain-with-sousdomain');
    }
    public function updatedSelectedDomain($domain)
    {
        if (!is_null($domain)) { 
            //$domains = DB::table('sousdomains')->where('domain_id', $domain)->pluck('domain_id')->toArray();
           
            $this->sous_domains = Sousdomain::where('domain_id', $domain)->get();
            // dd($this->sous_domains);
            
        }
    }
}
