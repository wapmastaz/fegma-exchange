<table class="table table-bordered text-nowrap" id="example-1">
  <thead class="bg-primary">
    <tr>
      <th class="wd-15p text-white border-bottom-0">#</th>
      <th class="wd-15p text-white border-bottom-0">Name</th>
      {{-- <th class="wd-20p text-white border-bottom-0">Email</th> --}}
      <th class="wd-20p text-white border-bottom-0">Phone</th>
      <th class="wd-20p text-white border-bottom-0">Amount (USD)</th>
      <th class="wd-20p text-white border-bottom-0">Local Amount</th>
      <th class="wd-20p text-white border-bottom-0">Country</th>
      <th class="wd-20p text-white border-bottom-0">Status</th>
      <th class="wd-15p text-white border-bottom-0">Created At</th>
      <th class="wd-15p text-white border-bottom-0">Action</th>
    </tr>
  </thead>
  <tbody>
    @if (count($orders) > 0)

      @foreach ($orders as $key => $order)
        <tr>
          <td>{{ ++$key }}</td>
          <td>{{ $order->getNameAttributes() }}</td>
          <td>{{ $order->mobile }}</td>
          <td class="">${{ number_format($order->btc_amount, 2) }}</td>
          <td class="">{!! moneyFormat($order->country, $order->local_amount) !!}</td>
          <td>{{ getCountryData($order->country)['countryname'] }}</td>
          <td>
            @if ($order->status == 1)
              <span class="badge bg-success">Approved</span>
            @endif
            @if ($order->status == 2)
              <span class="badge bg-warning">Declined</span>
            @endif
            @if ($order->status == 0)
              <span class="badge bg-danger">Pending</span>
            @endif
          </td>
          <td>{{ $order->created_at->format('Y-m-d') }}</td>

          <td>
            <div class="dropdown">
              <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false">
                Actions
              </button>
              <div class="dropdown-menu" style="">
                <a href="{{ route('order.show', $order->uid) }}" class="dropdown-item"><span
                    class="fe fe-eye"></span> View Details</a>
                {{-- <a href="{{ route('order.edit', $order->uid) }}" class="dropdown-item"><span
                    class="fe fe-edit"></span> edit</a> --}}
                <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal"
                  data-bs-target="#my-modal{{ $order->uid }}"><span class="fe fe-trash"></span> delete</a>
              </div>
            </div>
            {{-- delete modal --}}
            <div id="my-modal{{ $order->uid }}" class="modal fade" tabindex="-1" role="dialog"
              aria-labelledby="my-modal-title" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="my-modal-title">Delete Order</h5>
                    <button class="close" data-bs-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p class="font-bold">
                      Are you sure you want to delete Order:
                      <span class="text-danger"><strong>{{ $order->getNameAttributes() }}</strong></span>
                    </p>
                  </div>
                  <div class="modal-footer">
                    <form action="{{ route('order.destroy', $order->uid) }}" method="post">
                      @csrf
                      <button class="btn btn-danger" type="submit">Proceed</button>
                    </form>

                    <button class="btn btn-warning" data-bs-dismiss="modal" type="button">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
      @endforeach

    @endif

  </tbody>
</table>
