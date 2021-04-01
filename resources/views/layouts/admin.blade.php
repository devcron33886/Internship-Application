<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ trans('panel.site_title') }}</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/@coreui/coreui@3.2/dist/css/coreui.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/css/perfect-scrollbar.min.css" rel="stylesheet" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
    @yield('styles')
</head>

<body class="c-app">
    @include('partials.menu')
    <div class="c-wrapper">
      <header class="c-header c-header-light c-header-fixed">
        <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
        <svg class="c-icon c-icon-lg">
        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
        </svg>
        </button><a class="c-header-brand d-lg-none c-header-brand-sm-up-center" href="#">
        <svg width="118" height="46" alt="CoreUI Logo">
        <use xlink:href="assets/brand/coreui-pro.svg#full"></use>
        </svg></a>
        <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
        <svg class="c-icon c-icon-lg">
        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
        </svg>
        </button>
        <ul class="c-header-nav d-md-down-none">
        <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Dashboard</a></li>
        <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Users</a></li>
        <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Settings</a></li>
        </ul>
        <ul class="c-header-nav mfs-auto">
        <li class="c-header-nav-item px-3 c-d-legacy-none">
        <button class="c-class-toggler c-header-nav-btn" type="button" id="header-tooltip" data-target="body" data-class="c-dark-theme" data-toggle="c-tooltip" data-placement="bottom" title="Toggle Light/Dark Mode">
        <svg class="c-icon c-d-dark-none">
        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-moon"></use>
        </svg>
        <svg class="c-icon c-d-default-none">
        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-sun"></use>
        </svg>
        </button>
        </li>
        </ul>
        <ul class="c-header-nav">
        <li class="c-header-nav-item dropdown d-md-down-none mx-2"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <svg class="c-icon">
        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
        </svg><span class="badge badge-pill badge-danger">5</span></a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0">
        <div class="dropdown-header bg-light"><strong>You have 5 notifications</strong></div><a class="dropdown-item" href="#">
        <svg class="c-icon mfe-2 text-success">
        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user-follow"></use>
        </svg> New user registered</a><a class="dropdown-item" href="#">
        <svg class="c-icon mfe-2 text-danger">
        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user-unfollow"></use>
        </svg> User deleted</a><a class="dropdown-item" href="#">
        <svg class="c-icon mfe-2 text-info">
        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-chart"></use>
        </svg> Sales report is ready</a><a class="dropdown-item" href="#">
        <svg class="c-icon mfe-2 text-success">
        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-basket"></use>
        </svg> New client</a><a class="dropdown-item" href="#">
        <svg class="c-icon mfe-2 text-warning">
        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
        </svg> Server overloaded</a>
        <div class="dropdown-header bg-light"><strong>Server</strong></div><a class="dropdown-item d-block" href="#">
        <div class="text-uppercase mb-1"><small><b>CPU Usage</b></small></div><span class="progress progress-xs">
        <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </span><small class="text-muted">348 Processes. 1/4 Cores.</small>
        </a><a class="dropdown-item d-block" href="#">
        <div class="text-uppercase mb-1"><small><b>Memory Usage</b></small></div><span class="progress progress-xs">
         <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
        </span><small class="text-muted">11444GB/16384MB</small>
        </a><a class="dropdown-item d-block" href="#">
        <div class="text-uppercase mb-1"><small><b>SSD 1 Usage</b></small></div><span class="progress progress-xs">
        <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
        </span><small class="text-muted">243GB/256GB</small>
        </a>
        </div>
        </li>
        <li class="c-header-nav-item dropdown d-md-down-none mx-2"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <svg class="c-icon">
        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-list-rich"></use>
        </svg><span class="badge badge-pill badge-warning">15</span></a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0">
        <div class="dropdown-header bg-light"><strong>You have 5 pending tasks</strong></div><a class="dropdown-item d-block" href="#">
        <div class="small mb-1">Upgrade NPM &amp; Bower<span class="float-right"><strong>0%</strong></span></div><span class="progress progress-xs">
        <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </span>
        </a><a class="dropdown-item d-block" href="#">
        <div class="small mb-1">ReactJS Version<span class="float-right"><strong>25%</strong></span></div><span class="progress progress-xs">
        <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </span>
        </a><a class="dropdown-item d-block" href="#">
        <div class="small mb-1">VueJS Version<span class="float-right"><strong>50%</strong></span></div><span class="progress progress-xs">
        <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
        </span>
        </a><a class="dropdown-item d-block" href="#">
        <div class="small mb-1">Add new layouts<span class="float-right"><strong>75%</strong></span></div><span class="progress progress-xs">
        <div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </span>
        </a><a class="dropdown-item d-block" href="#">
        <div class="small mb-1">Angular 8 Version<span class="float-right"><strong>100%</strong></span></div><span class="progress progress-xs">
        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </span>
        </a><a class="dropdown-item text-center border-top" href="#"><strong>View all tasks</strong></a>
        </div>
        </li>
        <li class="c-header-nav-item dropdown d-md-down-none mx-2"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <svg class="c-icon">
        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
        </svg><span class="badge badge-pill badge-info">7</span></a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0">
        <div class="dropdown-header bg-light"><strong>You have 4 messages</strong></div><a class="dropdown-item" href="#">
        <div class="message">
        <div class="py-3 mfe-3 float-left">
        <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/7.jpg" alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
        </div>
        <div><small class="text-muted">John Doe</small><small class="text-muted float-right mt-1">Just now</small></div>
        <div class="text-truncate font-weight-bold"><span class="text-danger">!</span> Important message</div>
        <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
        </div>
        </a><a class="dropdown-item" href="#">
        <div class="message">
        <div class="py-3 mfe-3 float-left">
        <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/6.jpg" alt="user@email.com"><span class="c-avatar-status bg-warning"></span></div>
        </div>
        <div><small class="text-muted">John Doe</small><small class="text-muted float-right mt-1">5 minutes ago</small></div>
        <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
        <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
        </div>
        </a><a class="dropdown-item" href="#">
        <div class="message">
        <div class="py-3 mfe-3 float-left">
        <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/5.jpg" alt="user@email.com"><span class="c-avatar-status bg-danger"></span></div>
        </div>
        <div><small class="text-muted">John Doe</small><small class="text-muted float-right mt-1">1:52 PM</small></div>
        <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
        <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
        </div>
        </a><a class="dropdown-item" href="#">
        <div class="message">
        <div class="py-3 mfe-3 float-left">
        <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/4.jpg" alt="user@email.com"><span class="c-avatar-status bg-info"></span></div>
        </div>
        <div><small class="text-muted">John Doe</small><small class="text-muted float-right mt-1">4:03 PM</small></div>
        <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
        <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
        </div>
        </a><a class="dropdown-item text-center border-top" href="#"><strong>View all messages</strong></a>
        </div>
        </li>
        <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/6.jpg" alt="user@email.com"></div>
        </a>
        <div class="dropdown-menu dropdown-menu-right pt-0">
        <div class="dropdown-header bg-light py-2"><strong>Account</strong></div><a class="dropdown-item" href="#">
        <svg class="c-icon mfe-2">
        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
        </svg> Updates<span class="badge badge-info mfs-auto">42</span></a><a class="dropdown-item" href="#">
        <svg class="c-icon mfe-2">
        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
        </svg> Messages<span class="badge badge-success mfs-auto">42</span></a><a class="dropdown-item" href="#">
        <svg class="c-icon mfe-2">
        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-task"></use>
        </svg> Tasks<span class="badge badge-danger mfs-auto">42</span></a><a class="dropdown-item" href="#">
        <svg class="c-icon mfe-2">
        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-comment-square"></use>
        </svg> Comments<span class="badge badge-warning mfs-auto">42</span></a>
        <div class="dropdown-header bg-light py-2"><strong>Settings</strong></div><a class="dropdown-item" href="#">
        <svg class="c-icon mfe-2">
        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
        </svg> Profile</a><a class="dropdown-item" href="#">
        <svg class="c-icon mfe-2">
        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
        </svg> Settings</a><a class="dropdown-item" href="#">
        <svg class="c-icon mfe-2">
        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-credit-card"></use>
        </svg> Payments<span class="badge badge-secondary mfs-auto">42</span></a><a class="dropdown-item" href="#">
        <svg class="c-icon mfe-2">
        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-file"></use>
        </svg> Projects<span class="badge badge-primary mfs-auto">42</span></a>
        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
        <svg class="c-icon mfe-2">
        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
        </svg> Lock Account</a><a class="dropdown-item" href="#">
        <svg class="c-icon mfe-2">
        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
        </svg> Logout</a>
        </div>
        </li>
        <button class="c-header-toggler c-class-toggler mfe-md-3" type="button" data-target="#aside" data-class="c-sidebar-show">
        <svg class="c-icon c-icon-lg">
        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-applications-settings"></use>
        </svg>
        </button>
        </ul>
        <div class="c-subheader justify-content-between px-3">
        
        <ol class="breadcrumb border-0 m-0 px-0 px-md-3">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item"><a href="#">Admin</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
        
        </ol>
        <div class="c-subheader-nav d-md-down-none mfe-2"><a class="c-subheader-nav-link" href="#">
        <svg class="c-icon">
        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speech"></use>
        </svg></a><a class="c-subheader-nav-link" href="#">
        <svg class="c-icon">
        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-graph"></use>
        </svg> &nbsp;Dashboard</a><a class="c-subheader-nav-link" href="#">
        <svg class="c-icon">
        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
        </svg> &nbsp;Settings</a></div>
        </div>
        </header>

        <div class="c-body">
            <main class="c-main">


                <div class="container-fluid">
                    @if(session('message'))
                        <div class="row mb-2">
                            <div class="col-lg-12">
                                <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                            </div>
                        </div>
                    @endif
                    @if($errors->count() > 0)
                        <div class="alert alert-danger">
                            <ul class="list-unstyled">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @yield('content')

                </div>


            </main>
            <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/perfect-scrollbar.min.js"></script>
    <script src="https://unpkg.com/@coreui/coreui@3.2/dist/js/coreui.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        $(function() {
  let copyButtonTrans = '{{ trans('global.datatables.copy') }}'
  let csvButtonTrans = '{{ trans('global.datatables.csv') }}'
  let excelButtonTrans = '{{ trans('global.datatables.excel') }}'
  let pdfButtonTrans = '{{ trans('global.datatables.pdf') }}'
  let printButtonTrans = '{{ trans('global.datatables.print') }}'
  let colvisButtonTrans = '{{ trans('global.datatables.colvis') }}'
  let selectAllButtonTrans = '{{ trans('global.select_all') }}'
  let selectNoneButtonTrans = '{{ trans('global.deselect_all') }}'

  let languages = {
    'en': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/English.json'
  };

  $.extend(true, $.fn.dataTable.Buttons.defaults.dom.button, { className: 'btn' })
  $.extend(true, $.fn.dataTable.defaults, {
    language: {
      url: languages['{{ app()->getLocale() }}']
    },
    columnDefs: [{
        orderable: false,
        className: 'select-checkbox',
        targets: 0
    }, {
        orderable: false,
        searchable: false,
        targets: -1
    }],
    select: {
      style:    'multi+shift',
      selector: 'td:first-child'
    },
    order: [],
    scrollX: true,
    pageLength: 100,
    dom: 'lBfrtip<"actions">',
    buttons: [
      {
        extend: 'selectAll',
        className: 'btn-primary',
        text: selectAllButtonTrans,
        exportOptions: {
          columns: ':visible'
        },
        action: function(e, dt) {
          e.preventDefault()
          dt.rows().deselect();
          dt.rows({ search: 'applied' }).select();
        }
      },
      {
        extend: 'selectNone',
        className: 'btn-primary',
        text: selectNoneButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'copy',
        className: 'btn-default',
        text: copyButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'csv',
        className: 'btn-default',
        text: csvButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'excel',
        className: 'btn-default',
        text: excelButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'pdf',
        className: 'btn-default',
        text: pdfButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'print',
        className: 'btn-default',
        text: printButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'colvis',
        className: 'btn-default',
        text: colvisButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      }
    ]
  });

  $.fn.dataTable.ext.classes.sPageButton = '';
});

    </script>
    @yield('scripts')
</body>

</html>
