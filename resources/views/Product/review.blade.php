<div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
    <div class="row">
        <div class="col-lg-12">
            <div class="row total_rate">
                <div class="col-lg-6">
                    <div class="box_total">
                        <h5>Overall</h5>
                        <h4>{{ $highestRating }}.0 </h4>
                        <h6>(0{{ $countreview }} Reviews)</h6>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rating_list">
                        <h3>Based on {{ $countreview }} Reviews</h3>
                        <ul class="list">
                            <li>
                                <a href="#">5 Star
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i> 0{{ $five }} </a>
                            </li>
                            <li>
                                <a href="#">4 Star
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i> 0{{ $four }} </a>
                            </li>
                            <li>
                                <a href="#">3 Star
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i> 0{{ $three }} </a>
                            </li>
                            <li>
                                <a href="#">2 Star
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i> 0{{ $two }} </a>
                            </li>
                            <li>
                                <a href="#">1 Star
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>0{{ $one }} </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row total_rate">
                        </div>
                        <div class="review_list">
                            @foreach ($review as $key => $item)
                                <div class="review_item @if ($key >= 2) hidden-review @endif">
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="{{ $item->user->image }}" alt="" />
                                        </div>
                                        <div class="media-body">
                                            <h4>{{ $item->user->name }} </h4>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <p class="col-lg-9">
                                        {{ $item->comment }}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                        
                        <button class="btn read-more-btn" style="border-radius:20px;color:white;background-color:#ff9900;box-shadow:-1.717px 8.835px 29.76px 2.24px rgba(255, 51, 104, 0.18);line-height: 38px;padding: 0px 30px;font-size:13px" id="show-more-btn">Show More</button>
                    </div>
                </div>
            </div>
            
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                $(document).ready(function () {
                    $('.hidden-review').hide(); 
            
                    if ($('.hidden-review').length > 0) {
                        $('#show-more-btn').show();
                    }
                    
                    $('#show-more-btn').on('click', function () {
                        $('.hidden-review').toggle(); 
                        
                        if ($(this).text() === 'Show More') {
                            $(this).text('Show Less');
                        } else {
                            $(this).text('Show More');
                        }
                    });
                });
            </script>
            