@php use Illuminate\Support\Facades\Gate; @endphp

@extends('dashboard.core.app')
@section('title', __('titles.Courses'))
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>جميع الدورات</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">جميع الدورات</h3>
                            <div class="card-tools">
                                    <a href="{{url('create')}}" class="btn  btn-dark">اضافه دوره جديد</a>

                            </div>
                        </div>
                        <div class="card-body">

                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>صوره الدوره</th>
                                    <th>اسم الدوره</th>
                                    <th>سعر الدوره علي الموقع</th>
                                    <th>سعر الدوره علي التطبيق</th>
                                    <th>القسم</th>
                                    <th>حاله الدوره</th>
                                    <th>@lang('dashboard.Registration_status')</th>
{{--                                    <th>@lang('dashboard.Operations')</th>--}}
                                </tr>
                                </thead>
                                <tbody>
{{--                                @forelse($courses as $key => $course)--}}
                                    <tr>
                                        <td>1</td>
                                        <td><img src="{{asset('img/user1-128x128.jpg')}}" style="width: 50px;height: 50px" /></td>
                                        <td>yyyyyy</td>
                                        <td>Ryal</td>
                                        <td>500</td>
                                        <td>Category</td>
                                        <td>Active</td>
                                        <td>Opened</td>

{{--                                        <td>--}}
{{--                                            <div class="operations-btns" style="">--}}
{{--                                                    <a href="#" class="btn  btn-dark">@lang('dashboard.Edit')</a>--}}
{{--                                                    <a href="#" class="btn  btn-dark">@lang('dashboard.Show')</a>--}}

{{--                                                        <button class="btn btn-dark waves-effect waves-light" data-toggle="modal" data-target="#delete-modal-1">@lang('dashboard.Delete')</button>--}}
{{--                                                        <div id="delete-modal-1" class="modal fade modal2 " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">                                                    <div class="modal-dialog">--}}
{{--                                                                <div class="modal-content float-left">--}}
{{--                                                                    <div class="modal-header">--}}
{{--                                                                        <h5 class="modal-title">تأكيد الحذف</h5>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="modal-body">--}}
{{--                                                                        <p>@lang('dashboard.sure_delete')</p>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="modal-footer">--}}
{{--                                                                        <button type="button" data-dismiss="modal" class="btn btn-dark waves-effect waves-light m-l-5 mr-1 ml-1">--}}
{{--                                                                            @lang('dashboard.close')--}}
{{--                                                                        </button>--}}
{{--                                                                        <form action="#" method="post">--}}
{{--                                                                            @csrf--}}
{{--                                                                            {{method_field('DELETE')}}--}}
{{--                                                                            <button type="submit" class="btn btn-danger">@lang('dashboard.Delete')</button>--}}
{{--                                                                        </form>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
                                    </tr>
{{--                                @empty--}}
{{--                                    @include('dashboard.core.includes.no-entries', ['columns' => 6])--}}
{{--                                @endforelse--}}
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
{{--                            {{ $courses->appends(request()->all())->links() }}--}}
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
