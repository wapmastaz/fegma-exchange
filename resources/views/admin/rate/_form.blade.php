<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label for="country">Country <span class="text-danger">*</span></label>
      <select id="country" class="form-control @error('country') is-invalid @enderror" name="country">
        <option value="">--Select--</option>
        <option value="nigeria" @if ($rate->country == 'nigeria') selected @endif>Nigeria</option>
        <option value="ghana" @if ($rate->country == 'ghana') selected @endif>Ghana</option>
      </select>
      @error('country')
        <small class="form-text text-danger">{{ $message }}</small>
      @enderror
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
      <label for="value">Value <span class="text-danger">*</span></label>
      <input id="value" class="form-control @error('value') is-invalid @enderror" type="text" name="value"
        value="{{ $rate->value }}">
      @error('value')
        <small class="form-text text-danger">{{ $message }}</small>
      @enderror
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
      <label for="amount">Amount in USD <span class="text-danger">*</span></label>
      <input id="amount" class="form-control @error('amount') is-invalid @enderror" type="text" name="amount_in_usd"
        value="{{ $rate->amount_in_usd }}">
      @error('amount')
        <small class="form-text text-danger">{{ $message }}</small>
      @enderror
    </div>
  </div>
  <div class="form-group col-md-12">
    <a href="{{ route('rate.index') }}" class="btn btn-secondary mr-2"><span class="fe fe-arrow-left"></span>
      Back</a>
    <button class="btn btn-primary" type="submit">Submit Request</button>
  </div>
</div>
