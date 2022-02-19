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
                    @if (count($questions))
                    @php
                    $count = 1;
                    @endphp
                    <ul class="list-group">
                        @foreach ($questions as $question)
                        <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-200 border-radius-lg">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex flex-column">
                                        <p class="text-left">
                                            {{ $question->question }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-12" style="width: 100%;flex-shrink: initial">
                                    <div class="ms-auto text-end">
                                        <form action="{{ route('home.update',$question->id) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <Button class="btn btn-link text-success text-gradient px-3 mb-0"><i
                                                    class="fas fa-check"></i> Answered</Button>
                                        </form>
                                    </div>
                                </div>
                                <div class="text-start">
                                    <span class="text-dark ms-sm-1 font-weight-bold text-end">Anonymous:
                                    </span>{{ $question->created_at->diffForHumans() }}
                                </div>
                            </div>
                        </li>
                        @php
                        $count++;
                        @endphp
                        @endforeach
                    </ul>
                    @else
                    <span class="text-dark ms-sm-1 font-weight-bold text-end">No pending questions to be answered
                    </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection