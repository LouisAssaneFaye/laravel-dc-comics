@extends('layouts.app')
@section('title','create comic page')

@section('main-content')
<h1>
    Create a new comic
</h1>

<div>
    
<form class="col-12">
  <div class="mb-3">
    <label for="title" class="form-label">
        Title
    </label>
    <input type="text" class="form-control" id="comic-title" name="title">
  </div>

  <div class="mb-3">
    <label for="description" class="form-label">
        Description
    </label>
    <input type="text" class="form-control" id="description-title" name="description">
  </div>

  <div class="mb-3">
    <label for="thumb" class="form-label">
        Thumb
    </label>
    <input type="text" class="form-control" id="thumb-title" name="thumb">
  </div>

  <div class="mb-3">
    <label for="price" class="form-label">
        Price
    </label>
    <input type="text" class="form-control" id="price-title" name="price">
  </div>

  <div class="mb-3">
    <label for="series" class="form-label">
        Series
    </label>
    <input type="text" class="form-control" id="series-title" name="series">
  </div>

  <div class="mb-3">
    <label for="sale_date" class="form-label">
        Sale date
    </label>
    <input type="text" class="form-control" id="sale_date-title" name="sale_date">
  </div>

  <div class="mb-3">
    <label for="type" class="form-label">
        Type
    </label>
    <input type="text" class="form-control" id="type-title" name="type">
  </div>

  <div class="mb-3">
    <label for="artists" class="form-label">
        Artists
    </label>
    <input type="text" class="form-control" id="artists-title" name="artists">
  </div>

  <div class="mb-3">
    <label for="writers" class="form-label">
        Writers
    </label>
    <input type="text" class="form-control" id="writers-title" name="writers">
  </div>

  <button type="submit" class="btn btn-primary">Create new comic</button>
  <button type="reset" class="btn btn-warning">Reset fields</button>
</form>
</div>


@endsection