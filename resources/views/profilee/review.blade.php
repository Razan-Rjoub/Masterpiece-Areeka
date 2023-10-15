@extends('layout.master')
@section('title', 'Review')

@section('content')
    <style>
        /* Add CSS to style the stars */
        .star {
            font-size: 24px;
            color: gray;
            /* Default color for unselected stars */
            cursor: pointer;
        }

        /* Style selected stars with the 'selected' class */
        .star.selected {
            color: rgb(255, 174, 0);
            /* Yellow color for selected stars */
        }
    </style>
    <br><br><br><br><br><br><br><br><br>
    <form action=" {{route('reviewstore')}}" method="POST" class="container">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <img src="{{ asset('images/product/' . $product->image) }}" alt="product" style="width:250px">
                </div>
            </div>
            <div class="col-md-8" style="padding-top:20px;padding-bottom:20px">
                <div class="rating">
                    <span class="star" data-value="1">&#9733;</span>
                    <span class="star" data-value="2">&#9733;</span>
                    <span class="star" data-value="3">&#9733;</span>
                    <span class="star" data-value="4">&#9733;</span>
                    <span class="star" data-value="5">&#9733;</span>
                </div>
                <input type="hidden" name="rating" id="rating" value="1">
                <div class="form-group">
                    <textarea name="comment" id="comment" rows="5" class="form-control" placeholder="Write your review here..."></textarea>
                </div>
                <input type="hidden" name='store_id' value="{{$product->store->id}}">
                <input type="hidden" name='product_id' value="{{$product->id}}">
                <br>
                <button type="submit" class="btn btn-primary"
                    style="background-color:#ffb400;color:white;font-size:18px;height:35px;border:#ffb400">Submit
                    Review</button>
            </div>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.rating .star').on('click', function() {
                $('.rating .star').removeClass('selected');

                $(this).addClass('selected');
                $(this).prevAll().addClass('selected');
                $('#rating').val($(this).data('value'));
            });
        });
    </script>


@endsection
