@extends('admin.layouts.app')

@push('name')
{{ trans('bannerTypes.'.$type['name']) }}
@endpush







@section('content')
<div class="row">
    <div class="col-12">
        <div class="card-box">
            <div style="display: flex; align-items:center; justify-content: space-between; padding:20px 0">
                <h4 class="mt-0 header-title float-left">{{ trans('admin.banners') }}</h4>
                @if ($banners->count() < 2)
                <a  href="{{ route('banner.create', [app()->getLocale(), $type['id']]) }}" type="button" class="float-right btn btn-info waves-effect width-md waves-light">{{ trans('admin.add_banner') }}</a>

                @endif   </div>
            <div class="container-fluid">
                <div class="row">
                    @foreach ($banners as $banner)
                        <div class="col-xl-4 col-md-6">
                            <div class="card-box">
                                <div class="dropdown float-right">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a style="color: #ff3535"  href="{{ route('banner.edit', [app()->getLocale(), $banner->id]) }}" class="dropdown-item">{{ trans('admin.edit') }}</a>
                                        <a style="color: #ff3535" href="{{ route('banner.destroy', [app()->getLocale(), $banner->id]) }}" onclick="return confirm('&#4307;&#4304;&#4320;&#4332;&#4315;&#4316;&#4308;&#4305;&#4314;&#4312; &#4334;&#4304;&#4320;&#4311; &#4320;&#4317;&#4315; &#4306;&#4321;&#4323;&#4320;&#4311; &#4305;&#4304;&#4316;&#4308;&#4320;&#4312;&#4321; &#4321;&#4308;&#4325;&#4330;&#4312;&#4312;&#4321; &#4332;&#4304;&#4328;&#4314;&#4304; ?');" class="dropdown-item">{{ trans('admin.delete') }}</a>
                                      </div>
                                </div>  <a href="{{ $banner->translate()->slug }}" target="blank">{{ $banner->translate()->slug }}</a>
                                    @if (isset($banner->thumb) && $banner->thumb != null) 
                                        <img class="img-fluid card-image" src="{{image($banner->thumb)}}" alt="Card image cap">
                                        @elseif(isset($banner->translate()->locale_additional['thumb'][0]))
                                        <img class="img-fluid card-image" src="/uploads/img/{{$banner->translate()->locale_additional['thumb'][0]['file']}}" alt="Card image cap">
                                    @else
                                        @endif
                                <p>{{ substr(strip_tags($banner->desc), 0, 230) }}</p>
                            </div>
                        </div><!-- end col -->
                    @endforeach
                    <div class="col-lg-12">
                        {{ $banners->links() }}
                    </div>
                </div>
              <!-- end row -->
          </div>
        </div>
    </div>
</div>
@endsection


