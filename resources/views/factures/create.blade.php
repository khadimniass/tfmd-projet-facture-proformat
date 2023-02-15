@extends('layouts.header')
<style>
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>
@extends('layouts.partials.spinner')

<div id="main-wrapper">
    @extends('layouts.partials.nav-header')
    <div class="content-body">
        <div class="container-fluid">
            <div class="basic-form">
                <form method="POST" id="form" action="{{route('save')}}">
                    @csrf
                    <div class="form">
                        <div class="form-row mt-3">
                            <i class="fa fa-minus btn btn-primary" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></i>
                                <div class="col mt-1 mt-sm-0">
                                    <input name="qte" type="number" value="" onchange="valueOfInput(event)" class="form-control" min="0" placeholder="nombre">
                                </div>
                            <i class="fa fa-plus btn btn-success"  onclick="this.parentNode.querySelector('input[type=number]').stepUp()"></i>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="designation">
                            </div>
                            <div class="col mt-1 mt-sm-0">
                                <input type="number" class="form-control" min="0" placeholder="prix unitaire">
                            </div>

                            <div class="col mt-1 mt-sm-0">
                                <input type="number" class="form-control" placeholder="prix total" readonly value="12000">
                            </div>
                            <i class="fa fa-trash btn btn-danger" onclick="supprimer(event)"></i>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-6 mt-1">
                <button class="form-control btn bg-success" #form >CONFIRMER</button>
            </div>
            <div class="col-sm-6 mt-1">
                <button id="add-line-form" class="form-control btn bg-primary">+ AJOUTER</button>
            </div>
        </div>
    </div>
    @extends('layouts.partials.sidebar')
</div>
</div>
@extends('layouts.footer')
<script src="{{asset("js/facture.js")}}"></script>
