<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label for="question">Question <span class="text-danger">*</span></label>
      <input id="question" class="form-control @error('question') is-invalid @enderror" type="text" name="question"
        value="{{ $faq->question }}">
      @error('question')
        <small class="form-text text-danger">{{ $message }}</small>
      @enderror
    </div>
  </div>

  <div class="col-md-12">
    <div class="form-group">
      <label for="status">Status <span class="text-danger">*</span></label>
      <select id="status" class="form-control @error('status') is-invalid @enderror" name="status">
        <option value="">--Select--</option>
        <option value="published" @if ($faq->status == 1) selected @endif>Published</option>
        <option value="pending" @if ($faq->status == 0) selected @endif>Pending</option>
      </select>
      @error('status')
        <small class="form-text text-danger">{{ $message }}</small>
      @enderror
    </div>
  </div>

  <div class="col-md-12">
    <div class="form-group">
      <label for="answer">Answer <span class="text-danger">*</span></label>
      <textarea name="answer" id="answer" cols="30" rows="10"
        class="form-control @error('answer') is-invalid @enderror">{{ $faq->answer }}</textarea>
      @error('answer')
        <small class="form-text text-danger">{{ $message }}</small>
      @enderror
    </div>
  </div>

  <div class="form-group col-md-12">
    <a href="{{ route('faq.index') }}" class="btn btn-secondary mr-2"><span class="fe fe-arrow-left"></span>
      Back</a>
    <button class="btn btn-primary" type="submit">Submit Request</button>
  </div>
</div>
