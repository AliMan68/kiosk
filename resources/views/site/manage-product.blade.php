
<!DOCTYPE html>
<html lang="fa" dir="rtl">


<head>
    <title>پنل مدیریت</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="پنل مدیریت">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('/images/favicon.png') }}">

    @include('include.css')
    @include('include.js')
</head>
<body class="active-ripple theme-blue fix-header sidebar-extra ">
@include('include.nav-bar')
<div id="page-content">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet box border shadow round">
                        <div class="portlet-heading">
                            <div class="portlet-title">
                                <h3 class="title">
                                    <i class="icon-fire"></i>
                                    افزودن غذا
                                </h3>
                            </div>
                            <div class="buttons-box">
                                <a class="btn btn-sm btn-default btn-round btn-fullscreen" rel="tooltip" title="تمام صفحه" href="#">
                                    <i class="icon-size-fullscreen"></i>
                                </a>
                                <a class="btn btn-sm btn-default btn-round btn-collapse" rel="tooltip" title="کوچک کردن" href="#">
                                    <i class="icon-arrow-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="portlet-body">
                                <form role="form" action="InsertNewDCurrency" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-body">

                                            <div class="form-group">
                                                <label>نام غذا</label>
                                                <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-info"></i>
                                                </span>
                                                    <input type="text" name="name" class="form-control" value="" placeholder="نام غذا وارد شود">
                                                </div>
                                            </div>

                                            <div class="form-group relative">
                                                <input type="file" name="filename[]" class="form-control">
                                                <label>عکس</label>
                                                <div class="input-group round">
                                                    <input type="text" class="form-control file-input" placeholder="برای آپلود کلیک کنید">
                                                    <span class="input-group-btn input-group-sm">
                                                <button type="button" class="btn btn-info">
                                                    <i class="icon-picture"></i>
                                                    آپلود عکس
                                                </button>
                                            </span>
                                                </div><!-- /.input-group -->
                                            </div><!-- /.form-group -->

                                        <div class="form-group">
                                            <label>قیمت اصلی</label>
                                            <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-info"></i>
                                                </span>
                                                <input type="number" name="name" class="form-control" value="" placeholder="قیمت به تومان وارد شود">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="price">قیمت با تخفیف</label>
                                            <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-info"></i>
                                                </span>
                                                <input type="number" name="name" class="form-control" value="" placeholder="قیمت به تومان وارد شود">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>توضیحات </label>
                                            <div class="input-group round">
                                                <span class="input-group-addon">
                                                    <i class="icon-info"></i>
                                                </span>
                                                <input type="text" name="name" class="form-control" value="" placeholder="توضیحات مختصر">
                                            </div>
                                        </div>

                                        </div>

                                        <div class="form-actions">
                                            <button type="submit" name="submit" class="btn btn-info btn-round">
                                                <i class="icon-check"></i>
                                                ذخیره
                                            </button>
                                        </div><!-- /.form-actions -->
                                    </div>
                                </form>
                            </div><!-- /.portlet-body -->
                        </div><!-- /.portlet -->

                    </div>
                </div>
            </div>

            <!-- BEGIN PAGE JAVASCRIPT -->
            <script src="{{ asset('plugins/data-table/js/jquery.dataTables.min.js') }}"></script>
            <script src="{{ asset('plugins/data-table/js/dataTables.bootstrap.js') }}"></script>
            <script src="{{ asset('js/pages/datatable.js') }}"></script>
            <link href="{{ asset('plugins/data-table/css/dataTables.bootstrap.css') }}" rel="stylesheet">

        </div>
    </div>
</div>
</body>


