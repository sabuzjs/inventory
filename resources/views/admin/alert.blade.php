@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible" role="alert"> 
        <i class="ti-check"></i> {{$message}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <span aria-hidden="true"></span> </button>
    </div>
    
@endif  

<script>
    $("document").ready(function(){
    setTimeout(function(){
       $("div.alert").remove();
    },3000 ); // 3 secs

});
</script>

{{-- <div class="jq-toast-single jq-has-icon jq-icon-success" style="text-align: left; display: none;">
    <span class="jq-toast-loader jq-toast-loaded" 
    style="-webkit-transition: width 3.1s ease-in;                       
    -o-transition: width 3.1s ease-in;                       
    transition: width 3.1s ease-in;                       
    background-color: #ff6849;">
    </span><span class="close-jq-toast-single">×</span><h2 class="jq-toast-heading">Welcome to Material Pro admin</h2>Use the predefined ones, or specify a custom position object.</div> --}}
