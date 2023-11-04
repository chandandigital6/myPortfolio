<div class="rounded shadow py-5 px-4">
    <div class="icon"> <i class="fas fa-user">{{$x}}</i>
    </div>
    <h3 class="mb-3">{{$services->title}}</h3>
    <p class="mb-4">{{$services->short_description}}</p> <a wire:navigate class="btn btn-sm btn-outline-primary" href="{{route('serviceDetails',$services->id)}}">View Details <i class="las la-arrow-right ms-1"></i></a>
</div>
