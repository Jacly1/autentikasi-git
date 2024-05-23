@extends('layouts.app')
@section('content')
 <div class="container">
    <div class="rowjustify-content-center">
        <div class="col-md-8">
            <divc lass="card">
                <div class="card-header">{{__('Dashboard')}}</div>
                    <div class="card-body">
                        @if(session('status'))
                            <div class="alertalert-success"role="alert">
                                {{session('status')}}
                            </div>
                        @endif
                        You are a mahasiswa.
                    </div>
                </div>
            </div>
        </div>
    </div>
 @endsection

 