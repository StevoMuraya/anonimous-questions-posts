@extends('format')

@section('content')

<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
        <h6 class="text-white text-capitalize ps-3">Questions Management</h6>
    </div>
</div>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-10 mt-4">
            <div class="card">
                <div class="card-header pb-0 px-3">
                </div>
                <div class="card-body pt-4 p-3">
                    <div class="row p-3">
                        <div class="col-lg-10">
                            @if (Session::has('message'))
                            <div class="alert alert-success text-white">{{ Session::get('message') }}</div>
                            @endif
                            @if($errors->any())
                            <div class="bg-gradient-danger text-white p-1"
                                style="border-radius: 0.3em;font-weight: 300;display: flex;flex-direction: column;font-size: 0.9em">
                                <p style="margin-bottom: 0.5em">
                                    @error('question')
                                    {{ $message }}
                                    @enderror
                                </p>
                            </div>
                            @endif
                            <form action="{{ route('ask.store') }}" method="post" class="text-start">
                                @csrf
                                <div class="form-group input-group-outline my-3">
                                    <label class="form-label">Question Section</label>
                                    <textarea class="form-control p-2" placeholder="Type your question here"
                                        name="question" id="" cols="30" rows="5"
                                        style="border: 1px solid #D81B60 "></textarea>
                                </div>
                                <div class="text-start">
                                    <button class="btn bg-gradient-primary w-100 my-4 mb-2">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection