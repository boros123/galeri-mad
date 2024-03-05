  @if (session()->has('successfoto'))
      <div class="container-fluid">
          <div class="col-lg-6 mx-auto">

              <div class="alert alert-primary mt-5 alert-dismissible fade show   mx-auto" role="alert">
                  {{ session('successfoto') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              </div>
          </div>
      </div>
  @elseif(session()->has('successalbum'))
      <div class="container-fluid">
          <div class="col-lg-6 mx-auto">

              <div class="alert alert-primary mt-5 alert-dismissible fade show   mx-auto" role="alert">
                  {{ session('successalbum') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              </div>
          </div>
      </div>
  @elseif(session()->has('successupdate'))
      <div class="container-fluid">
          <div class="col-lg-6 mx-auto">

              <div class="alert alert-primary mt-5 alert-dismissible fade show   mx-auto" role="alert">
                  {{ session('successupdate') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              </div>
          </div>
      </div>
  @elseif(session()->has('errorupdate'))
      <div class="container-fluid">
          <div class="col-lg-6 mx-auto">

              <div class="alert alert-primary mt-5 alert-dismissible fade show   mx-auto" role="alert">
                  {{ session('errorupdate') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              </div>
          </div>
      </div>
  @elseif(session()->has('done'))
      <div class="container-fluid">
          <div class="col-lg-6 mx-auto">

              <div class="alert alert-primary mt-5 alert-dismissible fade show   mx-auto" role="alert">
                  {{ session('done') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              </div>
          </div>
      </div>
  @elseif(session()->has('kosong'))
      <div class="container-fluid">
          <div class="col-lg-6 mx-auto">

              <div class="alert alert-primary mt-5 alert-dismissible fade show   mx-auto" role="alert">
                  {{ session('kosong') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              </div>
          </div>
      </div>
  @endif
