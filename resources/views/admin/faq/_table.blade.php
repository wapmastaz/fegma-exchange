<table class="table table-bordered text-nowrap" id="example-1">
  <thead class="bg-primary">
    <tr>
      <th class="wd-15p text-white border-bottom-0">#</th>
      <th class="wd-15p text-white border-bottom-0">Question</th>
      <th class="wd-20p text-white border-bottom-0">Answer</th>
      <th class="wd-20p text-white border-bottom-0">Status</th>
      <th class="wd-15p text-white border-bottom-0">Created At</th>
      <th class="wd-15p text-white border-bottom-0">Action</th>
    </tr>
  </thead>
  <tbody>
    @if (count($faqs) > 0)

      @foreach ($faqs as $key => $faq)
        <tr>
          <td>{{ ++$key }}</td>
          <td>{{ $faq->question }}</td>
          <td>{{ $faq->answer ?? '' }}</td>
          <td>
            @if ($faq->status == 1)
              <span class="badge bg-success">Published</span>
            @else
              <span class="badge bg-danger">Pending</span>
            @endif
          </td>
          <td>{{ $faq->created_at->format('Y-m-d') }}</td>
          <td>
            <a href="{{ route('faq.edit', $faq->uid) }}" class="btn btn-sm btn-warning">edit</a>
            <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal"
              data-bs-target="#my-modal{{ $faq->uid }}">delete</a>

            {{-- delete modal --}}
            <div id="my-modal{{ $faq->uid }}" class="modal fade" tabindex="-1" role="dialog"
              aria-labelledby="my-modal-title" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="my-modal-title">Delete Rate</h5>
                    <button class="close" data-bs-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p class="font-bold">
                      Are you sure you want to delete Faq:
                      <span class="text-danger"><strong>{{ $faq->question }}</strong></span>
                    </p>
                  </div>
                  <div class="modal-footer">
                    <form action="{{ route('faq.destroy', $faq->uid) }}" method="post">
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
