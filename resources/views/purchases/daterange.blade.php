<div class="panel panel-default">
  <div class="panel-heading">
    အခ်ိန္အပိုင္းအျခားအလိုက္ ရွာေဖြျခင္း
  </div>
  <div class="panel-body">
    <?php $seg = Request::segment(1);
          $cat = Request::segment(2);
     ?>
    <form method="post" action="{{ url("/$seg/find") }}">
      {{ csrf_field() }}
      <div class="row">
        <div class="col-lg-4">
          <label for="startdate">မွ</label>
          <div class="input-group">
            <input required class="form-control" autocomplete="off" name="startdate" id="startdate" placeholder="ႏွစ္ ၊ လ ၊ ရက္">
            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
          </div>
        </div>
        <div class="col-lg-4">
          <label for="enddate">ထိ</label>
          <div class="input-group">
            <input required class="form-control" autocomplete="off" name="enddate" id="enddate" placeholder="ႏွစ္ ၊ လ ၊ ရက္">
            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
          </div>
        </div>

        <input type="hidden" name="category_id" value="{{$cat}}">

        <div class="col-lg-4">
          <button type="submit" name="find" class="btn btn-info form-control" style="margin-top: 23px;"><i class="glyphicon glyphicon-search"></i>ရွာမည္</button>
        </div>
      </div>
    </form>
  </div>
</div>
