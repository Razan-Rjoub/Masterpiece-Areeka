{{-- <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <div class="m-l-25 m-r--38 m-lr-0-xl">
                        <div class="wrap-table-shopping-cart">

                            <table class="table-shopping-cart">
                                <tr class="table_head">
                                    <th class="column-1">Order #</th>
                                    <th class="column-4">Total Price</th>
                                    <th class="column-2"></th>
                                    
                                    <th class="column-6">Status</th>
                                </tr>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($orderitem as $item)
                                    <tr class="table_row">
                                        <td class="column-1">{{ $i++ }}</td>
                                        <td class="column-4">
                                            {{ $item->totalprice }}JOD
                                        </td>
                                        <td class="column-2"></td>
                                        @if ($item->status == 'Delivered')
                                            <td class="column-6"><span
                                                    class="badge bg-label-success me-1">Delivered</span></td>
                                        @endif
                                        @if ($item->status == 'out for delivery')
                                            <td class="column-6"><span class="badge bg-label-primary me-1">Out For
                                                    Delivery</span></td>
                                        @endif
                                        @if ($item->status == 'Dispatched')
                                            <td class="column-6"><span
                                                    class="badge bg-label-warning me-1">Dispatched</span></td>
                                        @endif

                                        <td><a href="{{ route('orderdetails', ['id' => $item->id]) }}"
                                                style="color:#ffb400 ;text-decoration:underline ">View More</a></td>
                                    </tr>
                                @endforeach

                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div> --}}


{{-- <hr style="border-top: 1px solid gray;"> --}}

<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <div class="section-top-border">
        <h3 class="mb-30">Orders</h3>
        <div class="progress-table-wrap">
            <div class="progress-table">
                <div class="table-head">

                    <div class="serial">Order #</div>
                    <div class="country">Total Price</div>
                    <div class="country">Status</div>

                </div>
                @php
                    $i = 1;
                @endphp
                @foreach ($orderitem as $item)
                    <div class="table-row">
                        <div class="serial">{{ $i++ }}</div>
                        <div class="country">{{ $item->totalprice }}</div>
                        <div class="country">
                            @if ($item->status == 'Delivered')
                                <td class="column-6"><span class="badge bg-label-success me-1"
                                        style="background-color: #4cd3e3;color:white">Delivered</span></td>
                            @endif
                            @if ($item->status == 'out for delivery')
                                <td class="column-6" style="background-color: #38a4ff;color:white"><span
                                        class="badge bg-label-primary me-1">Out For
                                        Delivery</span></td>
                            @endif
                            @if ($item->status == 'Dispatched')
                                <td class="column-6"><span
                                        class="badge bg-label-warning me-1"style="background-color: #ffb400; color:white">Dispatched</span>
                                </td>
                            @endif
                        </div>
                        <div class="serial"><a href="{{ route('orderdetails', ['id' => $item->id]) }}"
                            style="color:#ffb400 ;text-decoration:underline ">View More</a></div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
