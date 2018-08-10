@extends('layouts.app')

@section('content') <div class="row">
        <div class="col-md-8 col-md-offset-2">
     
            <div class="panel-heading">
                <h3 class="panel-title">Panel title  
            </div>

        <form method='post' action="{{route('create')}}">
      
      
            <input type="text" id="add-item" name ='item' class="form-control" 
            placeholder="Add new Item" />
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit"  id="add" class="btn btn-primary">Add new Item</button>

        </form>
            </div>
        </div>



         @endsection