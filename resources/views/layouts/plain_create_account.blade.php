{{-- Create Account Modal --}}
<div class="modal fade" id="myModalplainAccount" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Kindly <span style="color:#3490dc;">Log In</span> or <span style="color:#3490dc;">Register</span> to Create An Account</h4>
        </div>
        <div class="modal-body">
            <a class="btn btn-sm btn-primarys" href="{{ route('login') }}">Login</a>
            <a class="btn btn-sm btn-primarys" href="{{ route('register') }}">Register</a>                            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>