@extends('admin.layouts.app')
@section('content')

<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                  <h4 class="mb-sm-0 font-size-18">Create New Tracking</h4>
                  <div class="page-title-right">
                     <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xl-12 col-lg-12">
               
               <div class="tab-content">
                  <div class="tab-pane active" id="overview" role="tabpanel">
                     <div class="card">
                        <div class="card-header">
                           <h5 class="card-title mb-0">Profile</h5>
                        </div>
                        <div class="card-body">
                           <div>
                              <div class="pb-3">
                                 <div class="row">
                                    <div class="col-lg-12">
                                       <div>
                                          @if(session('success'))
                                             <p style="color: green">{{ session('success') }}</p>
                                          @endif
                                          <form action="{{ route('packages.store') }}" method="post">
                                             @csrf
                                             <div class="row">
                                                <div class="col-md-6">
                                                   <div class="mb-3">
                                                      <label class="form-label" for="formrow-email-input">Sender's Name</label>
                                                      <input type="text" class="form-control" id="formrow-firstname-input" value="" name='sendersname'>
                                                   </div>
                                                </div>
                                                <div class="col-md-6">
                                                   <div class="mb-3">
                                                      <label class="form-label" for="formrow-email-input">Sender's Email</label>
                                                      <input type="email" class="form-control" id="formrow-lastname-input" value="" name='sendersemail'>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-md-6">
                                                   <div class="mb-3">
                                                      <label class="form-label" for="formrow-email-input">Reciver's Name</label>
                                                      <input type="text" class="form-control" id="formrow-firstname-input" value="" name='recieversname'>
                                                   </div>
                                                </div>
                                                <div class="col-md-6">
                                                   <div class="mb-3">
                                                      <label class="form-label" for="formrow-email-input">Reciver's Email</label>
                                                      <input type="email" class="form-control" id="formrow-lastname-input" value="" name='recieversemail'>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-md-6">
                                                   <div class="mb-3">
                                                      <label class="form-label" for="formrow-email-input">Reciver's phone Number</label>
                                                      <input type="text" class="form-control" id="formrow-firstname-input" value="" name='recievers_phone'>
                                                   </div>
                                                </div>
                                                <div class="col-md-6">
                                                   <div class="mb-3">
                                                      <label class="form-label" for="formrow-email-input">Weight of Goods</label>
                                                      <input type="text" class="form-control" id="formrow-lastname-input" value="" name='weight'>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-md-6">
                                                   <div class="mb-3">
                                                      <label class="form-label" for="formrow-email-input">Pickup Location</label>
                                                      <input type="hidden" id="pickup_lat" name="pickup_lat">
                                                      <input type="hidden" id="pickup_lng" name="pickup_lng">
                                                      <input type="text" class="form-control" id="formrow-firstname-input" value="" name='pickup_address'>
                                                   </div>
                                                </div>
                                                <div class="col-md-6">
                                                   <div class="mb-3">
                                                      <label class="form-label" for="formrow-email-input">Delivery Location</label>
                                                      <input type="hidden" id="dropoff_lat" name="dropoff_lat">
                                                      <input type="hidden" id="dropoff_lng" name="dropoff_lng">
                                                      <input type="text" class="form-control" id="formrow-lastname-input" value="" name='dropoff_address'>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-md-6">
                                                   <div class="mb-3">
                                                      <label class="form-label" for="formrow-email-input">Expected Delivery Date</label>
                                                      <input type="date" class="form-control" id="formrow-lastname-input" value="" name='date'>
                                                   </div>
                                                </div>
                                                <div class="col-md-6">
                                                   <div class="mb-3">
                                                      <label class="form-label" for="formrow-email-input">Pickup Date</label>
                                                      <input type="date" class="form-control" id="formrow-lastname-input" value="" name='pickup_date'>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-md-6">
                                                   <div class="mb-3">
                                                      <label class="form-label" for="formrow-email-input">Type of shipment</label>
                                                      <input type="text" class="form-control" id="formrow-lastname-input" value="" name='type_shipment'>
                                                   </div>
                                                </div>
                                                <div class="col-md-6">
                                                   <div class="mb-3">
                                                      <label class="form-label" for="formrow-email-input">Product Name</label>
                                                      <input type="text" class="form-control" id="formrow-lastname-input" value="" name='product_name'>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-md-6">
                                                   <div class="mb-3">
                                                      <label class="form-label" for="formrow-email-input">Total Freight</label>
                                                      <input type="text" class="form-control" id="formrow-firstname-input" value="" name='total_freight'>
                                                   </div>
                                                </div>
                                               
                                             </div>
                                             
                                             <div class="mt-4">
                                                <button type="submit" name="sub-ins" class="btn btn-primary waves-effect waves-light">Create Package</button>
                                             </div>
                                          </form>
                                       </div>
                                    </div>
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                       <div class="modal-dialog modal-dialog-centered" role="document">
                                          <div class="modal-content">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<script>
// Function to fetch coordinates using Nominatim API
function getCoordinates(address, latInput, lngInput) {
    $.get('https://nominatim.openstreetmap.org/search', {
        q: address,
        format: 'json',
        limit: 1
    }, function(data) {
        if (data.length > 0) {
            $(latInput).val(data[0].lat);
            $(lngInput).val(data[0].lon);
        } else {
            alert('Location not found for: ' + address);
        }
    });
}

// Trigger when address fields change
$('#pickup_address').on('change', function() {
    getCoordinates($(this).val(), '#pickup_lat', '#pickup_lng');
});

$('#dropoff_address').on('change', function() {
    getCoordinates($(this).val(), '#dropoff_lat', '#dropoff_lng');
});
</script>


@endsection