<section class="third">
    <div> <span class="our-stores">Our Stores</span>
        <span><a href="../Stores/stores.html" class="view">View All</a></span>
    </div>

    <div class="row">
        @foreach ($store as $item)
          <div class="col-lg-3 img-text">
            <a href="{{route('product',  ['id' => $item->id])}}"><img src="{{$item->image}}" alt="{{$item->name}}"
                    class="stores-img"></a>
            <p class="Stores-name">{{$item->name}}</p>
        </div>   
        @endforeach
       
    
    </div>
</section>