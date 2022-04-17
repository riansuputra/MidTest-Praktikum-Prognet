@extends('layouts.admin-user.app')

@section('title', 'Tambah Keluhan - Lapor')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="form-signin" action="/user/keluhan/store" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-header">
                                <h2>Tambah Keluhan</h2>
                                <br>                                                                                                                             
                                <div class="col-mb-4">
                                    <div class="input-group input-group-static @error('judul') is-invalid @enderror mb-4">
                                        <label>Judul :</label>
                                        <input type="text" class="form-control" name="judul" autofocus value="{{ old('judul') }}">                                              
                                    </div>                                                      
                                </div>
                                <div class="col-mb-4">
                                    <div class="input-group input-group-static @error('keluhan') is-invalid @enderror mb-4">
                                        <label>Keluhan :</label>                                        
                                        <textarea class="form-control" rows="5" name="keluhan">{{ old('keluhan') }}</textarea>
                                    </div>                                                      
                                </div>
                                @if (count($errors) > 0)                                    
                                    @foreach ($errors->all() as $error)     
                                        <p class="text-danger">{{$error}}</p>
                                    @endforeach                                   
                                @endif                                                      
                                <div>
                                    <button class="btn btn-primary" type="submit">
                                        Tambahkan
                                    </button>                                                         
                                </div>                          
                            </div>
                        </form>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


