@extends('layouts.app')
@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            {{ $Calendar->render() }}
        </div>
        {{-- .content --}}
    </div>
@endsection
