@extends('layout.app')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
    ၀န္ထမ္းအခ်က္အလက္ ျပင္ဆင္ျခင္း
  </div>
  <div class="panel-body">
    <form method="post" action="/employees/{{ $emp->id }}">
      {{ csrf_field() }}
      {{ method_field('PUT') }}
    <!-- First Row Starts-->
      <div class="row">
        <div class="col-lg-4">
          <div class="form-gorup">
            <label for="name">အမည္</label>
            <div class="input-group">
              <input type="text" name="name" value="{{ $emp->name }}" class="form-control" placeholder="Type Name">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <label for="father">အဖအမည္</label>
            <input type="text" name="father" value="{{ $emp->father }}" class="form-control" placeholder="Type Father's Name">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <label for="nrc">မွတ္ပံုတင္အမွတ္</label>
            <input type="text" name="nrc" value="{{ $emp->nrc }}" class="form-control" placeholder="Type NRC Number">
          </div>
        </div>
    </div>
    <!-- First Row ends -->
    <!-- Second Row starts -->

    <div class="row">
      <div class="col-lg-4">
        <div class="form-group">
          <label for="dob">ေမြးသကၠရာဇ္</label>
          <div class="input-group">
            <input class="form-control" type="text" id="dob" name="dob" value="{{ $emp->dob }}" placeholder="Choose Date of Birth">
            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
          </div>
        </div>
      </div>
      <div class="col-lg-2">
        <div class="form-group">
          <label for="sex">က်ား / မ ေရြးရန္</label><br>
          <label class="radio-inline">
            <input type="radio" name="sex" value="က်ား" <?php if($sex === 'က်ား') echo "checked" ?>>
            က်ား
          </label>
          <label class="radio-inline">
            <input type="radio" name="sex" value="မ" <?php if($sex === 'မ') echo "checked" ?>>
            မ
          </label>
        </div>
      </div>
      <div class="col-lg-2">
        <div class="form-group">
          <label for="sex">အိမ္ေထာင္ ရွိ/ မရွိ</label><br>
          <label class="radio-inline">
            <input type="radio" name="marry" value="ရွိ" <?php if($marry === 'ရွိ') echo "checked" ?>>
            ရွိ
          </label>
          <label class="radio-inline">
            <input type="radio" name="marry" value="မရွိ" <?php if($marry === 'မရွိ') echo "checked" ?>>
            မရွိ
          </label>
        </div>
      </div>
      <div class="col-lg-4">
        <label for="phone">ဖုန္း</label>
        <div class="input-group">
          <input type="text" class="form-control" name="phone" placeholder="Enter Phone" value="{{ $emp->phone }}">
          <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
        </div>
      </div>
    </div>
    <!-- Third Row starts -->
    <div class="row">
      <div class="col-lg-4">
        <div class="form-group">
          <label for="ward">လမ္း ၊ ရပ္ကြက္/ေက်ြးရြာ</label>
          <input type="text" class="form-control" name="qtr" value="{{ $emp->ward }}" placeholder="အိမ္အမွတ္၊ လမ္း၊ ေက်းရြာ၊ ရပ္ကြက္ ">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
          <label for="city">ျမိဳ႕</label>
          <input type="text" class="form-control" name="city" value="{{ $emp->city }}" placeholder="Enter City">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
          <label for="state">ျပည္နယ္ / တိုင္းေဒသႀကီး</label>
          <input type="text" class="form-control" name="state" value="{{ $emp->state }}" placeholder="Enter State/Regions">
        </div>
      </div>
    </div>
  <!-- Third Row Ends -->
  <!-- Fourth Row starts -->
  <div class="row">
    <div class="col-lg-4">
      <div class="form-group">
        <label for="role">ရာထူး</label>
        <input type="text" name="role" class="form-control" value="{{ $emp->role }}" placeholder="Enter Role">
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label for="salary">အေျခခံလစာ</label>
        <input type="text" name="salary" class="form-control" value="{{ $emp->salary }}" placeholder="Enter Base Salary">
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label for="joindate">အလုပ္စဆင္းရက္</label>
        <div class="input-group">
          <input type="text" name="joindate" class="form-control" value="{{ $emp->joindate }}" placeholder="Enter Joined Date" id="joindate">
          <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        </div>
      </div>
    </div>
  </div>
  <!-- Fourth row ends -->
  <button type="submit" class="btn btn-success" name="editEmployee"><span class="glyphicon glyphicon-edit"></span> Edit</button>
  <a href="{{ url('/employees') }}" class="btn btn-danger"><i class="glyphicon glyphicon-circle-arrow-left"></i> Cancel</a>
</form>
  </div>
</div>
@endsection
