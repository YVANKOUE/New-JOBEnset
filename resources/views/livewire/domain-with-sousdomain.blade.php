<div>
    <div class="form-group">
        <select name="domain" class="form-control item" id="domain" placeholder="domain" wire:model = 'selectedDomain' >
            <option value="">Select domain</option>
            @foreach ($domains as $domain)
                <option class="form-control item" value="{{$domain->id}}">{{$domain->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        
        <select name="sous_domain" class="form-control item" id="sous_domain" required placeholder="sous domain">
            @foreach ($sous_domains as $sousdomain)
                <option class="form-control item" value="{{$sousdomain->id}}">{{$sousdomain->name}}</option>
            @endforeach
        </select>
    </div>
</div>
