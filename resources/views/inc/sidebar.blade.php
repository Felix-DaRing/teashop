 <div class="well sidebar-nav affix">

    <ul id="sidebar" class="nav nav-list">
    <h4><i class="glyphicon glyphicon-plus"></i>
        <small><b>Data ထည့္သြင္းျခင္း</b></small>
    </h4>
        <li class="{{ Request::segment(1) === 'menus' ? 'active' : '' }}"><a href="/menus">စားေသာက္ဖြယ္ရာမ်ား</a></li>
        <li class="{{ Request::segment(1) === 'categories' ? 'active' : '' }}"><a href="/categories">အမ်ိဳးအစားမ်ား</a></li>
        <li class="{{ Request::segment(1) === 'suppliers' ? 'active' : '' }}"><a href="/suppliers">ပစၥည္းေရာင္းသူမ်ား</a></li>
        <li class="{{ Request::segment(1) === 'rawitems' ? 'active' : '' }}"><a href="/rawitems">ကုန္ၾကမ္းပစၥည္းမ်ား</a></li>
    <h4><i class="glyphicon glyphicon-home"></i>
        <small><b>လုပ္ေဆာင္ခ်က္မ်ား</b></small>
    </h4>
        <li class="{{ Request::segment(1) === 'purchases' ? 'active' : '' }}"><a href="/purchases/create">အ၀ယ္စာရင္း</a></li>
        <li class="{{ Request::segment(1) === 'sales' ? 'active' : '' }}"><a href="/sales/pos">အေရာင္း (POS)</a></li>

    <h4><i class="glyphicon glyphicon-user"></i>
        <small><b>၀န္ထမ္းမ်ား</b></small>
    </h4>

        <li class="{{ Request::segment(1) === 'employees' ? 'active' : '' }}"><a href="/employees">၀န္ထမ္းစာရင္း</a></li>
        <li class="{{ Request::segment(1) === 'loans' ? 'active' : '' }}"><a href="/loans/create">ၾကိဳတင္ေငြ</a></li>

</div>



 {{-- <div class="sidebar-nav">
    <div class="well" style="width:300px; padding: 8px 0;">
        <ul class="nav nav-list">
          <li class="nav-header">Admin Menu</li>
          <li><a href="index"><i class="icon-home"></i> Dashboard</a></li>
          <li><a href="#"><i class="icon-envelope"></i> Messages <span class="badge badge-info">4</span></a></li>
          <li><a href="#"><i class="icon-comment"></i> Comments <span class="badge badge-info">10</span></a></li>
          <li class="active"><a href="#"><i class="icon-user"></i> Members</a></li>
          <li class="divider"></li>
          <li><a href="#"><i class="icon-comment"></i> Settings</a></li>
          <li><a href="#"><i class="icon-share"></i> Logout</a></li>
        </ul>
    </div>
</div> --}}
