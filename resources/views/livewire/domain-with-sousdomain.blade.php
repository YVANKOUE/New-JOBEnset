<div>
    <div class="form-group">
        <select name="domain[]" class="form-control item" id="domain" placeholder="domain" wire:model='selectedDomain' >
            <option value="">Select domain</option>
            @foreach ($domains as $domain)
                @foreach ($domain as $value)
                    <option class="form-control item" value="{{$value->id}}">{{$value->name}}</option>
                @endforeach
            @endforeach
        </select>
    </div>
    <div class="form-group">
        
        <select name="sous_domain" class="form-control item" id="sous_domain" required placeholder="sous domain">
            <option value="">Select sous domain</option>
            @foreach ($sous_domains as $sousdomain)
                <option class="form-control item" value="{{$sousdomain->id}}">{{$sousdomain->name}}</option>
            @endforeach
        </select>
    </div>
</div>
