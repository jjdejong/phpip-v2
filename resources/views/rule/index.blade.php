@extends('layouts.app')

@section('titre')
    Rules edition
@endsection

@section('content')
<legend>
  Rules
  <a href="rule/create" class="btn btn-primary float-right" data-toggle="modal" data-target="#addModal" data-remote="false" title="Rule data" data-source="/rule?" data-resource="/rule/create/">Add a new rule</a>
</legend>
<table class="table table-striped table-hover table-sm">
  <thead>
    <tr class="sticky-top bg-light">
      <th>Task</th>
      <th>Detail</th>
      <th>Trigger event</th>
      <th>Category</th>
      <th>Country</th>
      <th>Origin</th>
      <th>Type</th>
      <th>&nbsp;&nbsp;</th>
    </tr>
    <tr id="filter">
      <th><input class="filter-input form-control form-control-sm" data-source="/rule" name="Task" placeholder="Task" value="{{ old('Task') }}"></th>
      <th></th>
      <th><input class="filter-input form-control form-control-sm" data-source="/rule" value="{{ old('Trigger') }}" name="Trigger"  placeholder="Trigger event"/></th>
      <th></th>
      <th><input name="Country" class="filter-input form-control form-control-sm" data-source="/rule" name="Country" placeholder="Country" value="{{ old('Country') }}"/></th>
      <th colspan="3"></th>
    </tr>
  </thead>
  <tbody id="rule-list">
    @foreach ($ruleslist as $rule)
    <tr data-id="{{ $rule->id }}" class="reveal-hidden">
      <td>
        <a href="/rule/{{ $rule->id }}" data-toggle="modal" data-target="#infoModal" data-remote="false" title="Rule data" data-source="/rule" data-resource="/rule/">
          {{ $rule->taskInfo->name }}
        </a>
      </td>
      <td>{{ $rule->detail }}</td>
      <td>{{ empty($rule->trigger) ? '' : $rule->trigger->name }}</td>
      <td>{{ empty($rule->category) ? '' : $rule->category->category }}</td>
      <td>{{ empty($rule->country) ? '' : $rule->country->name }}</td>
      <td>{{ empty($rule->origin) ? '' : $rule->origin->name }}</td>
      <td>{{ empty($rule->type) ? '' : $rule->type->name }}</td>
      <td>
        <a class="delete-from-list text-danger hidden-action float-right" data-id="{{ $rule->id }}" title="Delete rule" href="javascript:void(0);">&times;</a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>


<!-- Modals -->
@include('partials.table-show-modals')
<div id="addModal" class="modal fade" role="dialog">
@include('partials.generic-modals')
</div>

@endsection

@section('script')

@include('tables.table-js')

@stop
