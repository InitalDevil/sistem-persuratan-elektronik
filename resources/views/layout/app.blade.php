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
                <h1 class="m-0 text-dark">@yield('content_title')</h1>
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