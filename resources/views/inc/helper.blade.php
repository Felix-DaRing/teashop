@if(Request::segment(1) === 'categories')
	<a href="/{{ Request::segment(1) }}/create" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> အသစ္</a>
	<a href="/{{ Request::segment(1) }}" class="btn btn-primary"><i class="glyphicon glyphicon-list"></i>  အားလံုး </a>
	<br><br>
@endif

@if(Request::segment(1) === 'rawitems')
	<a href="/{{ Request::segment(1) }}/create" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> အသစ္</a>
	<a href="/{{ Request::segment(1) }}" class="btn btn-primary"><i class="glyphicon glyphicon-list"></i>  အားလံုး </a>
	<br><br>
@endif

@if(Request::segment(1) === 'menus')
	<a href="/{{ Request::segment(1) }}/create" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> အသစ္</a>
	<a href="/{{ Request::segment(1) }}" class="btn btn-primary"><i class="glyphicon glyphicon-list"></i>  အားလံုး </a>
	<br><br>
@endif

@if(Request::segment(1) === 'suppliers')
	<a href="/{{ Request::segment(1) }}/create" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> အသစ္</a>
	<a href="/{{ Request::segment(1) }}" class="btn btn-primary"><i class="glyphicon glyphicon-list"></i>  အားလံုး </a>
	<br><br>
@endif

@if(Request::segment(1) === 'purchases')
	<a href="/{{ Request::segment(1) }}/create" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> ယေန႔အ၀ယ္</a>
	<a href="/{{ Request::segment(1) }}/date" class="btn btn-primary"><i class="glyphicon glyphicon-calendar"></i>  အေသးစိတ္ </a>
	<a href="/{{ Request::segment(1) }}/edit" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i>  ျပင္ဆင္ </a>
	<br><br>
@endif

@if(Request::segment(1) === 'employees')
	<a href="/{{ Request::segment(1) }}/create" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> အသစ္</a>
	<a href="/{{ Request::segment(1) }}" class="btn btn-primary"><i class="glyphicon glyphicon-list"></i>  အားလံုး </a>
	<a href="/loans/create" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i> ၾကိဳထုတ္ </a>
	<br><br>
@endif

@if(Request::segment(1) === 'loans')
	<a href="/{{ Request::segment(1) }}/create" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> အသစ္</a>
	<a href="/{{ Request::segment(1) }}" class="btn btn-primary"><i class="glyphicon glyphicon-list"></i>  အားလံုး </a>
	<br><br>
@endif
