@extends('backend.layouts.master')

@section('title')
جميع الصفحات
@stop

@section('content')
	<!-- Page Header -->
	<h3 class="page-title">
	الصفحات
	<small><a href="/../admin/pages/create" class="btn btn-xs default"> صفحة جديدة </a></small>
	</h3>
	<!-- END Page Header -->
	<!-- Pages Tables -->
	<div class="table-scrollable">	
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th style="width:30%">عنوان الصفحة</th>
					<th style="width:30%">الرابط</th>
					<th>اضيفت في</th>
					<th>اوامر</th>
				</tr>
			</thead>
			<tbody >
			@foreach($pages as $page)
				<tr>
					<td>{{ $page->title }}</td>
					<td>{{ $page->slug }}</td>
					<td>{{ $page->created_at }}</td>
					<td>
						<a href="#" class="btn btn-xs green"> عرض <i class="fa fa-file-o"></i></a>
						<a href="#" class="btn btn-xs default"> تعديل <i class="fa fa-edit"></i></a>
						<a href="#" class="btn btn-xs red"> حذف <i class="fa fa-trash-o"></i></a>
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>
	<!-- END Pages Table -->
@stop