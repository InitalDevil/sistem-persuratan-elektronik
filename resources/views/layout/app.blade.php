<!DOCTYPE html>
<html>

  <head>
    @include('layout._head')
    <title>
      Sistem Persuratan Disposisi Elektronik | @yield('title')
    </title>
  </head>

  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
      @include('layout._header')
      @include('layout._sidebar')
      <div class="content-wrapper">
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">@yield('Content Title')</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <section class="content">
          @yield('content')
        </section>
      </div>
      @include('layout._footer')
    </div>
  </body>

</html>