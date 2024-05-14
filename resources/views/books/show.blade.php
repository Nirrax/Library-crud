@extends('layouts.app')

@section('content')
<div class="container pad-top">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show book</div>

                <div class="card-body">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ $book->title }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="author" class="col-md-4 col-form-label text-md-right">{{ __('Author') }}</label>

                            <div class="col-md-6">
                                <input id="author" type="text" class="form-control" name="author" value="{{ $book->author }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="release_date" class="col-md-4 col-form-label text-md-right">{{ __('Release date (year)') }}</label>

                            <div class="col-md-6">
                                <input id="release_date" type="text" class="form-control" name="release_date" value="{{ $book->release_date }}" disabled>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="amount" class="col-md-4 col-form-label text-md-right">{{ __('Amount') }}</label>

                            <div class="col-md-6">
                                <input id="amount" type="number" class="form-control" name="amount" value="{{ $book->amount }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="available" class="col-md-4 col-form-label text-md-right">{{ __('Available') }}</label>

                            <div class="col-md-6">
                                <input id="available" type="number" class="form-control" name="available" value="{{ $book->available }}" disabled>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
