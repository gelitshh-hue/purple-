@extends('layouts.admin.app')
@section('content')
<div class="page-header">
    <h3 class="page-title"> Form elements </h3>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Forms</a></li>
        <li class="breadcrumb-item active" aria-current="page">Form elements</li>
    </ol>
    </nav>
</div>
<div class="row">
    </div>
    <div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Basic form Products</h4>
        <p class="card-description"> Basic form Products </p>
        <form class="forms-sample">
            <div class="form-group">
                <label for="exampleInputName1">Name_en</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name_en">
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Name_ar</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name_ar">
            </div>
            <div class="form-group">
                <label for="exampleTextarea1">description_en</label>
                <textarea class="form-control" id="exampleTextarea5" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleTextarea1">description_ar</label>
                <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
            </div>
            <button type="submit" class="btn btn-gradient-primary me-2">GO</button>
            <button class="btn btn-light">Cancel</button>
        </form>
        </div>
    </div>
    </div>
</div>
@endextends