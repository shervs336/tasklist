<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">{{ $title }}</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        @breadcrumb(['breadcrumbs' => $breadcrumbs])
        @endbreadcrumb
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
