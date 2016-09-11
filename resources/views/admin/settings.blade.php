@extends('admin.layouts.app')
@section('title','文章')
@section('content')
    <div class="row">
        <form role="form" id="setting-form" class="form-horizontal" action="{{ route('admin.save-settings') }}" method="post">
            <div class="col-md-12">
                <div class="widget widget-default">
                    <div class="widget-header">

                        <h3>设置</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget widget-default">
                    <div class="widget-body">
                        <div class="radio">
                            <label>
                                <input type="radio"
                                       {{ isset($google_analytics) && $google_analytics == 'true' ? ' checked ':'' }}
                                       name="google_analytics"
                                       value="true">启用谷歌分析
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio"
                                       {{ isset($google_analytics) && $google_analytics == 'true' ? '':' checked ' }}
                                       name="google_analytics"
                                       value="false">禁用谷歌分析
                            </label>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-8">
                <div class="widget widget-default">
                    <div class="widget-body">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">标题</div>
                                <input class="form-control" type="text" name="title" value="{{ $title or ''}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">作者</div>
                                <input class="form-control" type="text" name="author" value="{{ $author or ''}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">描述</div>
                                <input class="form-control" type="text" name="description"
                                       value="{{ $description or ''}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">头像</div>
                                <input class="form-control" type="text" name="avatar" value="{{ $avatar or ''}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="widget widget-default">
                    <div class="widget-body">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">每页数量</div>
                                <input class="form-control" type="number" name="page_size"
                                       value="{{ $page_size or 7 }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">简介图片</div>
                                <input class="form-control" type="text" name="profile_image"
                                       value="{{ $profile_image or ''}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">背景图片</div>
                                <input class="form-control" type="text" name="background_image"
                                       value="{{ $background_image or ''}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn bg-primary">
                    保存
                </button>
            </div>
        </form>
    </div>
@endsection

