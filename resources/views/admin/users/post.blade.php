

{{-- <div class="registration-form" style="border-color: black;"><br><br><br>
    <form action="{{route('ajouter.store')}}" method="post">
        @csrf
        <div class="center">
            <h1 style="color: #5791ff; text-align:center;font-family: system-ui;">Post Job</h1>
        </div><br>
        <div class="form-group">
            <input type="text" name="titre" class="form-control item" id="titre" placeholder="titre" required>
        </div>
        @livewire('domain-with-sousdomain')
        <div class="form-group">
            <textarea name="description" class="form-control item" id="birth-date" required placeholder="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-block create-account">Create</button>
        </div>
    </form>
</div> --}}
<?php $r = \Route::current()->getAction() ?>

<?php $route = (isset($r['as'])) ? $r['as'] : ''; ?>




 <!--begin::Wizard Step 1-->
 <div class="my-5 step" data-wizard-type="step-content" data-wizard-state="current">
    <h1 style="font-size:38px; color: #5791ff; text-align:center;font-family: system-ui; ">Post Job</h1><br>

    <!--begin::Group-->
    <!--end::Group-->

     <!--begin::Group-->
     <div class="form-group row">
        <div class="col-lg-12 col-xl-12">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="la la-user"></i>
                    </span>
                </div>
                <input type="text" placeholder="titre" class="form-control item  @error('titre') is-invalid @enderror" name="titre" id="titre" /> 
            </div>
            @error('titre')
                <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
            @enderror
            <span class="form-text text-muted" role="alert"><strong class="text-danger titre" ></strong></span>
        </div>
    </div>
    <!--end::Group-->

     <!--begin::Group-->
     @livewire('domain-with-sousdomain')
    <!--begin::Group-->
    <div class="form-group row">
        <div class="col-lg-12 col-xl-12">
            <div class="input-group">
                <textarea placeholder="description" class="form-control item @error('description') is-invalid @enderror" name="description" id="" cols="50" rows="10"></textarea>
            </div>
            @error('description')
                <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
            @enderror
        </div>
    </div>
</div>
<!--end::Wizard Step 1-->
