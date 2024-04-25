@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if($count > 0)
            <div class="alert alert-warning">
                <strong>Done</strong> Your servey is submitted thank you!
            </div>
            @else
            <form method="post" action="{{ route('servey.store') }}">
                @csrf
                @foreach($questions as $question)
                <h5 style="inline:block">{{ $loop->iteration }}). {{ $question->name }}</h5>
                @if($question->type == 'descriptive')
                <div class="mb-3">
                    <textarea name="{{$question->id}}" required class="form-control"></textarea>
                </div>
                @elseif($question->type == 'MCQ')
                @foreach($question->options as $option)
                <div class="mb-3">
                    <input type="checkbox" required name="mcq[{{$question->id}}]['{{ $option }}']" id=""> {{ $option }}
                </div>
                @endforeach
                @elseif($question->type == 'short')
                <div class="mb-3">
                    <input type="text" required name="{{$question->id}}" class="form-control" />
                </div>
                @elseif($question->type == 'date')
                <div class="mb-3">
                    <input type="date" required name="{{$question->id}}" class="form-control" />
                </div>
                @elseif($question->type == 'choice')
                <div class="mb-3">
                    <select name="{{ $question->id }}" id="" class="form-control">
                        @foreach($question->options as $choice)
                        <option required value="{{ $choice }}">{{ $choice }}</option>
                        @endforeach
                    </select>
                </div>
                @endif
                @endforeach
                <div>
                    <button class="btn btn-primary">SUBMIT</button>
                </div>
            </form>
            @endif
        </div>
    </div>
</div>
@endsection