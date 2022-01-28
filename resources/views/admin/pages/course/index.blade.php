@extends('admin.layouts.app')

@section('title', 'Kursus')
    
@section('content')
<div class="container-fluid">
    <div class="py-4">
        <h3>Kursus</h3>
        @foreach ($courses as $course)
        <div class="border border-2 p-2 mb-2">
            <div class="row">
                <div class="col-5">
                    <div class="d-flex align-items-center">
                        <img class="w-20" src="{{ asset('/storage/'.$course->thumbnail) }}" alt="">
                        <div class="ps-2">
                            <span class="p-1 px-2 bg-warning text-white rounded" style="font-size: 12px">{{ $course->category->name }}</span>
                            <h4 class="mt-2">{{ $course->name }}</h4>
                            <span>Rp {{ number_format($course->price) }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-7 d-flex justify-content-between align-items-center">
                    <div class="d-flex">
                        <div>
                            @php 
                                $sumRating = $course->review->sum('rate');
                                    if ($course->review->count() >= 1) {
                                        $countRating = $course->review->count();
                                        $resRating = $sumRating/$countRating;
                                    }else{
                                        $resRating = 0;
                                    }
                                $countRate = $resRating;
                            @endphp  
                            @for($x = 5; $x > 0; $x--)
                                @php 
                                    if($resRating > 0.5){
                                        echo '<i class="text-warning fas fa-star"></i>';
                                    }elseif($resRating <= 0 ){
                                        echo '<i class="text-warning far fa-star"></i>';
                                    }else{
                                        echo '<i class="text-warning fas fa-star-half-alt"></i>';
                                    }
                                    $resRating--;      
                                @endphp
                            @endfor
                        </div>
                        <span class="px-2">
                            {{ $countRate }}
                        </span>
                        <div class="d-flex align-items-center ps-3">
                            <i class="material-icons opacity-10">person</i>
                            <span class="">{{ $course->studentCourse->count() }}</span>
                        </div>
                    </div>
                    <div class="d-flex">
                        <span>{{ $course->topic->count() }} Topik Pelajaran</span>
                    </div>
                    <div class="">
                        <a href="{{ route('courses.show', $course->id) }}" class="btn btn-outline-success mb-0">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-outline-info mb-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit Data">
                            <i class="fas fa-pencil"></i>
                        </a>
                        <form action="{{ route('courses.destroy', $course->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger mb-0" 
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete Data">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        
    </div>
</div>
@endsection