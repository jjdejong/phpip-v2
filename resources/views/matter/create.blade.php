<form id="createMatterForm" autocomplete="off" class="ui-front">
  <input type="hidden" name="operation" value="{{ $operation ?? "new" }}" />
  <input type="hidden" name="origin_id" value="{{ $from_matter->id ?? '' }}" />
  <div class="form-group row">
    <label for="category" class="col-3 col-form-label font-weight-bold">Category</label>
    <div class="col-9">
      <input type="hidden" name="category_code" value="{{ $from_matter->category_code ?? ( $category['code'] ?? '') }}" />
      <input type="text" class="form-control" data-ac="/category/autocomplete" data-actarget="category_code" placeholder="{{ $category['name'] ?? ( $from_matter->category->category ??  '' ) }}" autocomplete="off">
    </div>
  </div>
  <div class="form-group row">
    <label for="country" class="col-3 col-form-label font-weight-bold">Country</label>
    <div class="col-9">
      <input type="hidden" name="country" value="{{ $from_matter->country ?? '' }}" />
      <input type="text" class="form-control" data-ac="/country/autocomplete" data-actarget="country" placeholder="{{ $from_matter->countryInfo->name ?? '' }}" autocomplete="off">
    </div>
  </div>
  <div class="form-group row">
    <label for="origin" class="col-3 col-form-label">Origin</label>
    <div class="col-9">
      <input type="hidden" name="origin" value="{{ $from_matter->origin ?? '' }}" />
      <input type="text" class="form-control" data-ac="/country/autocomplete" data-actarget="origin" placeholder="{{ $from_matter->originInfo->name ?? '' }}" autocomplete="off">
    </div>
  </div>
  <div class="form-group row">
    <label for="type_code" class="col-3 col-form-label">Type</label>
    <div class="col-9">
      <input type="hidden" name="type_code" value="{{ $from_matter->type_code ?? '' }}" />
      <input type="text" class="form-control" data-ac="/type/autocomplete" data-actarget="type_code" placeholder="{{ $from_matter->type->type ?? '' }}" autocomplete="off">
    </div>
  </div>
  <div class="form-group row">
    <label for="caseref" class="col-3 col-form-label font-weight-bold">Caseref</label>
    <div class="col-9">
      @if ( $operation == 'child' )
      <input type="text" class="form-control" name="caseref" value="{{ $from_matter->caseref ?? '' }}" readonly />
      @else
      <input type="text" class="form-control" data-ac="/matter/new-caseref" name="caseref" value="{{ $from_matter->caseref ?? ( $category['next_caseref'] ?? '') }}" autocomplete="off">
      @endif
    </div>
  </div>
  <div class="form-group row">
    <label for="responsible" class="col-3 col-form-label font-weight-bold">Responsible</label>
    <div class="col-9">
      <input type="hidden" name="responsible" value="{{ $from_matter->responsible ?? Auth::user()->login }}">
      <input type="text" class="form-control" data-ac="/user/autocomplete" data-actarget="responsible" placeholder="{{ $from_matter->responsible ?? Auth::user()->name }}" autocomplete="off">
    </div>
  </div>

  @if ( $operation == 'child' )
  <fieldset class="form-group">
    <legend>Use current {{ $from_matter->category->category ?? 'matter' }} as:</legend>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="priority" value="1" checked="checked">
      <label class="form-check-label" for="priority">Priority application</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="priority" value="0">
      <label class="form-check-label" for="parent">Parent application</label>
    </div>
  </fieldset>
  @endif

  <div>
    <button type="button" id="createMatterSubmit" class="btn btn-primary">Create</button>
  </div>
</form>
