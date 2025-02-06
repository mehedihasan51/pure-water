@extends('backend.app')

@section('title', 'Faq Create')

@section('content')

<div class="container">
    <div class="page-inner">
      <div class="page-header">
        <h3 class="fw-bold mb-3">Faq</h3>
        <ul class="breadcrumbs mb-3">
          <li class="nav-home">
            <a href="#">
              <i class="icon-home"></i>
            </a>
          </li>
          <li class="separator">
            <i class="icon-arrow-right"></i>
          </li>
          <li class="nav-item">
            <a href="#">Faq About</a>
          </li>
          <li class="separator">
            <i class="icon-arrow-right"></i>
          </li>
          <li class="nav-item">
            <a href="#">Update</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Faq Update</div>
            </div>

            <form action="{{route('faq.update', $faq->id)}}" method="POST" >
              @csrf
              @method('PUT')
                <div class="card-body">
                <div class="row">
                <div class="col-md-6 col-lg-12">
                  <div class="form-group">
                    <label for="question">Question:</label>
                    <input
                    type="text" class="form-control @error('question') is-invalid @enderror"
                    id="question" name="question" placeholder="Please Enter Question"
                    value="{{ old('question',$faq->question) }}"/>
                      @error('question')
                       <span class="text-danger">{{ $message }}</span>
                        @enderror
                  </div>
                  <div class="form-group">
                    <label for="answer">Answer:</label>
                    <input
                    type="text" class="form-control @error('companyName') is-invalid @enderror"
                    id="answer" name="answer" placeholder="Please Enter Answer"
                    value="{{ old('answer',$faq->answer) }}">
                       @error('answer')
                        <span class="text-danger">{{ $message }}</span>
                         @enderror
                  </div>
                </div>
              </div>
            </div>
            <div class="card-action">
              <button type="submit" class="btn btn-success">Submit</button>
              <a href="{{route('faq.index')}}" class="btn btn-danger">Cancel</a>
            </div>

        </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection