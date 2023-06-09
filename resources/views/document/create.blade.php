@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Document Details') }}</div>

                <div class="card-body">
                    <form action="/document/insert" enctype="multipart/form-data" method="POST">
                        @csrf

                        <div class="row mb-3">
                            <label for="crew_id" class="col-md-4 col-form-label text-md-end">{{ __('Crew') }}</label>

                            <div class="col-md-6">
                                <select name="crew_id" id="crew_id">
                                    @foreach ($crews as $crew)
                                        <option value="{{$crew->id}}">{{$crew->first_name.' '.$crew->last_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="code" class="col-md-4 col-form-label text-md-end">{{ __('Code') }}</label>

                            <div class="col-md-6">
                                <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ old('code') }}" required autocomplete="code" autofocus>

                                @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="document_number" class="col-md-4 col-form-label text-md-end">{{ __('Document Number') }}</label>

                            <div class="col-md-6">
                                <input id="document_number" type="text" class="form-control @error('document_number') is-invalid @enderror" name="document_number" value="{{ old('document_number') }}" required autocomplete="document_number" autofocus>

                                @error('document_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="dateIssued" class="col-md-4 col-form-label text-md-end">{{ __('Date Issued') }}</label>

                            <div class="col-md-6">
                                <input id="dateIssued" type="date" class="form-control @error('dateIssued') is-invalid @enderror" name="dateIssued" value="{{ old('dateIssued') }}" required autocomplete="dateIssued">

                                @error('dateIssued')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="dateExpiry" class="col-md-4 col-form-label text-md-end">{{ __('Date Expiry') }}</label>

                            <div class="col-md-6">
                                <input id="dateExpiry" type="date" class="form-control @error('dateExpiry') is-invalid @enderror" name="dateExpiry" value="{{ old('dateExpiry') }}" required autocomplete="dateExpiry" autofocus>

                                @error('dateExpiry')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="remarks" class="col-md-4 col-form-label text-md-end">{{ __('Remarks') }}</label>

                            <div class="col-md-6">
                                <input id="remarks" type="text" class="form-control @error('remarks') is-invalid @enderror" name="remarks" value="{{ old('remarks') }}" required autocomplete="remarks" autofocus>

                                @error('remarks')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <div class="btn">
                                    <a href="/home">Home</a>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
