@extends('admin.layouts.app')
@section('panel')
<div class="row">
    <div class="col-lg-12">
        <div class="card b-radius--10 ">
            <div class="card-body p-0">
                <div class="table-responsive--sm table-responsive">
                    <table class="table table--light style--two custom-data-table">
                        <thead>
                            <tr>
                                <th>@lang('Product Name')</th>
                                <th>@lang('Category')</th>
                                <th>@lang('Price')</th>
                                <th>@lang('Discount Price')</th>
                                <th>@lang('Image')</th>
                                <th>@lang('Status')</th>
                                <th>@lang('Action')</th>
                            </tr>
                        </thead>
                        <tbody>
                           @forelse ($products as $item)
                           <tr>
                              <td>{{__($item->name)}}</td>
                              <td>{{__($item->category->name)}}</td>
                              <td>
                                ${{__(showAmount($item->price))}}
                            </td>
                            <td> @if(isset($item->discount))
                                 {{__($item->discount)}}%
                                 @else
                                 <span>@lang('No')</span>
                                 @endif
                            </td>
                              <td><img src="{{ getImage(getFilePath('product').'/'.@$item->productImages[0]->image)}}" alt="Image" class="rounded" style="width:50px;"></td>
                                <td>@php echo $item->statusBadge($item->status); @endphp</td>
                              <td>
                                 <div class="button--group">
                                    <a href=""  class="btn btn-sm btn--primary"><i class="las la-edit"></i></a>
                                 </div>
                              </td>
                           </tr>
                           @empty
                           <tr>
                             <td class="text-muted text-center" colspan="100%">{{__($emptyMessage) }}</td>
                          </tr>
                           @endforelse
                        </tbody>
                    </table><!-- table end -->
                </div>
            </div>
            @if ($products->hasPages())
            <div class="card-footer py-4">
                {{ paginateLinks($products) }}
            </div>
            @endif
        </div><!-- card end -->
    </div>
</div>

@endsection
@push('breadcrumb-plugins')
<a href="" class="btn btn-sm btn--primary "><i class="las la-plus"></i>@lang('Add
    New')</a>
@endpush

