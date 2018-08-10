@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
             
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Panel title 
                <a href="#" class=pull-right data-toggle="modal" data-target=".bs-example-modal-lg"> <i class="fa fa-plus"></i></h3>
            </a></div>
            <div class="panel-body">
            {{ csrf_field() }}
            <ul class="list-group">
            @foreach ( $item as $items )
                <li class="list-group-item myitem" data-toggle="modal" data-target=".bs-example-modal-lg">{{$items->item}}
                <input type="hidden" id="item-id" value ="{{$items->id}}" />
                </li>
               
            @endforeach
            </ul>
            </div>
        </div>

        </div>
        
    </div>
</div>
@endsection
