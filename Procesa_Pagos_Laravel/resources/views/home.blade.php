@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Make a Payment</div>

                <div class="card-body">
                    <form action="" method="post">
                        @csrf

                        <div class="row">
                            <div class="col-auto">
                                <label for="">How much want to pay?</label>
                                <input type="number" min="5" step="0.01" class="form-control" name="value" value="{{ mt_rand(500,100000) / 100 }}" required>
                                <small class="form-text text-muted">
                                use values with up to two decimals positions,
                                using dot "."
                                </small>
                            </div>

                            <div class="col-auto">
                                <label for="">How much want to pay?</label>
                                <select class="custom-select" name="currency" id="currency" required>
                                    @foreach($currencies as $currency)
                                        <option value="{{$currency->iso}}">
                                            {{strtoupper($currency->iso)}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="row mt-3">
                            <div class="col">
                            
                                <label for="">Select the desire payment platform</label>
                                <div class="form-group">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        @foreach($paymentPlatforms as $paymentPlatform)
                                            <label for="" class="btn btn-outline-secondary rounded m-2 p-1">
                                            <input 
                                                type="radio" 
                                                name="payment_platform" 
                                                value="{{ $paymentPlatform->id }}"
                                                required
                                            >
                                            <img class="img-thumbnail" src="{{ asset( $paymentPlatform->image ) }}" alt="">
                                            
                                            </label>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-3"> 
                            <button type="submit" class="btn btn-primary btn-block" id="payButton">Pay</button>
                        </div>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection