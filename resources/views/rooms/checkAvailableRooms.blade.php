
@extends('layouts.app')
@section('content')
<input type="hidden" name="_token" value="qbuQgVOYJ0tkLX6OPq5gYGJXqPG0Pke7VfuRXF53">
<div class="col-md-1"><label class="form-control-label">FROM:</label></div>
<div class="col-md-4">
    <input type="date" class="form-control" name="dateFrom"/>
</div>
<div class="col-md-1"><label>TO:</label></div>
<div class="col-md-4">
    <input class="form-control" name="dateTo" value="" type="date"/>
</div>
<div class="col-md-2">
    <input class="btn" type="submit" value="SEARCH"/>
</div>
</form>
<table class="table">
<thead>
<tr>
    <th width="200">Room</th>
    <th width="200">Availability</th>
    <th width="200">Action</th>
</tr>
</thead>
<tbody>
<tr>
    <td>101</td>
    <td>

        <h7>Available</h7>

    </td>
    <td></td>
</tr>
<tr>
    <td>102</td>
    <td>

        <h7>Available</h7>

    </td>
    <td></td>
</tr>
<tr>
    <td>201</td>
    <td>

        <h7>Available</h7>

    </td>
    <td></td>
</tr>
<tr>
    <td>202</td>
    <td>

        <h7>Available</h7>

    </td>
    <td></td>
</tr>
</tbody>
</table>
@endsection
