@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                      <div class="col-md-4">
                        <a href="https://apps.apple.com/us/app/online-florist-floweradvisor">
                          <img src="https://www.freepnglogos.com/uploads/app-store-logo-png/file-app-store-ios-custom-size-18.png" alt="..." class="img-thumbnail" target="_blank">
                        </a>
                      </div>
                      <div class="col-md-4">
                        <a href="https://www.floweradvisor.com.ph/flowersphilippines" target="_blank">
                          <button type="button" class="btn btn-primary">Someone's day</button>
                        </a>
                      </div>
                      <div class="col-md-4">
                        <button onclick="myFunction()">Copy text</button>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
  function myFunction() {
  

   /* Copy the text inside the text field */
  navigator.clipboard.writeText("HALLOW10");

  /* Alert the copied text */
  alert("Copied the text: " + "HALLOW10");
}
</script>
