@extends('layouts.admin')

@section('content')
    <div class="card mb-12 mb-xl-12" id="kt_profile_details_view" style="margin: 10px; padding: 10px">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Show Card</h2>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    {{ $card->name }}
                </div>

                <div class="form-group">
                    <strong>Circle:</strong>
                    {{ $card->circle->name ?? '' }}
                </div>

                <div class="form-group">
                    <strong>Status</strong>
                    {{ $card->status }}
                </div>
            </div>
        </div>
    </div>
@endsection
