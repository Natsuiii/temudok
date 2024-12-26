@extends('layouts.home')

@section('content')
    <div class="container p-4">
        <div class="d-flex justify-content-center">
            <div class="card">
                <div class="card-body text-center">
                    @lang('message.pay1') <br>
                    <strong>{{ $appointment->amount }}</strong> <br>
                    <button type="button" class="btn btn-primary mt-3" id="pay-button">@lang('message.pay')</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://app.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
    <script type="text/javascript">
        document.getElementById('pay-button').onclick = function(){
          // SnapToken acquired from previous step
          snap.pay('{{ $appointment->snap_token }}', {
            // Optional
            onSuccess: function(result){
              window.location.href = '{{ route('success', ['appointment' => $appointment->id]) }}';
            },
            // Optional
            onPending: function(result){
              /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
            },
            // Optional
            onError: function(result){
              /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
            }
          });
        };
      </script>
@endpush