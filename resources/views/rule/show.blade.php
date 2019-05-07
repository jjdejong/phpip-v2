<div id="edit-rule-content">
	<input type="hidden" name="rule_id" id="rule-id" value="{{ $ruleInfo->id }}" />
	<fieldset>
		<legend>Task rule details <span class="badge badge-light">{{ $ruleInfo->id }}</span></legend>
		<table class="table table-sm table-hover" data-id="{{ $ruleInfo->id }}" data-source="/rule/">
			<tr>
				<td><label for="task" class="required-field" title="{{ $ruleComments['task'] }}">Task</label></td>
				<td class="ui-front"><input class="form-control noformat" name="task" value="{{ empty($ruleInfo->taskInfo) ? '' : $ruleInfo->taskInfo->name }}"></td>
				<td><label for="detail" title="{{ $ruleComments['detail'] }}">Detail</label></td>
				<td><input id="detail" class="form-control editable noformat" name="detail" value="{{ $ruleInfo->detail }}"></td>
			</tr>
			<tr>
				<td><label for="for_country" title="{{ $ruleComments['for_country'] }}">Country</label></td>
				<td class="ui-front"><input type="text" class="form-control noformat" name="for_country" value="{{ empty($ruleInfo->country) ? '' : $ruleInfo->country->name }}"></td>
				<td><label for="is_active" title="{{ $ruleComments['active'] }}">Is active</label></td>
				<td>
					<div class="form-check form-check-inline">
  					<input class="form-check-input" type="radio" name="active" id="is_active" value="1" {{ $ruleInfo->active ? 'checked="checked"' : "" }}>
  					<label class="form-check-label" for="is_active">Yes</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="active" id="is_active" value="0" {{ $ruleInfo->active ? "" : 'checked="checked"' }}>
					  <label class="form-check-label" for="is_active">No</label>
					</div>
				</td>
			</tr>
			<tr>
				<td><label for="for_origin" title="{{ $ruleComments['for_origin'] }}">Origin</label></td>
				<td class="ui-front"><input class="form-control noformat" name="for_origin" value="{{ empty($ruleInfo->origin) ? '' : $ruleInfo->origin->name }}"></td>
				<td><label for="for_category" title="{{ $ruleComments['for_category'] }}">Category</label></td>
				<td class="ui-front"><input class="form-control noformat" name="for_category" value="{{ empty($ruleInfo->category) ? '' : $ruleInfo->category->category }}"></td>
			</tr>
			<tr>
				<td>
					<label for="notes" title="{{ $ruleComments['notes'] }}">Notes</label><br />
					<button type="button" data-field="notes" id="updateNotes" class="area hidden-action btn btn-primary btn-sm">&#9432; Save</button>
				</td>
				<td><textarea data-field="#updateNotes" id="notes" class="editable form-control noformat" name="notes" cols="" rows="">{{ $ruleInfo->notes }}</textarea></td>
				<td><label for="for_type" title="{{ $ruleComments['for_type'] }}">Type</label></td>
				<td class="ui-front"><input class="form-control noformat" name="for_type" value="{{ empty($ruleInfo->type) ? '' : $ruleInfo->type->type }}"></td>
			</tr>
		</table>
	</fieldset>
	<fieldset>
		<legend>Rule details</legend>
		<table class="table table-sm table-hover" data-id="{{ $ruleInfo->id }}">
			<tr>
				<td><label for="trigger_event" title="{{ $ruleComments['trigger_event'] }}">Trigger event</label></td>
				<td class="ui-front"><input class="form-control noformat" name="trigger_event" value="{{ empty($ruleInfo->trigger) ? '' : $ruleInfo->trigger->name }}"></td>
				<td><label for="use_parent" title="{{ $ruleComments['use_parent'] }}">Use parent</label></td>
				<td>
					<div class="form-check form-check-inline">
  					<input class="form-check-input" type="radio" name="use_parent" id="use_parent" value="1" {{ $ruleInfo->use_parent ? 'checked="checked"' : "" }}>
  					<label class="form-check-label" for="use_parent">Yes</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="use_parent" id="use_parent" value="0" {{ $ruleInfo->use_parent ? "" : 'checked="checked"' }}>
					  <label class="form-check-label" for="use_parent">No</label>
					</div>
				</td>
			</tr>
			<tr>
				<td><label for="use_before" title="{{ $ruleComments['use_before'] }}">Use before</label></td>
				<td><input type='text' class="form-control noformat form-control" size="10" name="use_before" value="{{ $ruleInfo->use_before != '' ?  $ruleInfo->use_before: '...' }}"></td>
				<td><label for="clear_task" title="{{ $ruleComments['clear_task'] }}">Clear task</label></td>
				<td>
					<div class="form-check form-check-inline">
  					<input class="form-check-input" type="radio" name="clear_task" id="clear_task" value="1" {{ $ruleInfo->clear_task ? 'checked="checked"' : "" }}>
  					<label class="form-check-label" for="clear_task">Yes</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="clear_task" id="clear_task" value="0" {{ $ruleInfo->clear_task ? "" : 'checked="checked"' }}>
					  <label class="form-check-label" for="clear_task">No</label>
					</div>
				</td>
			</tr>
			<tr>
				<td><label for="use_after" title="{{ $ruleComments['use_after'] }}">Use after</label></td>
				<td><input type="text" class="form-control noformat form-control" size="10" name="use_after" value="{{ $ruleInfo->use_after != "" ?  $ruleInfo->use_after: "..." }}"></td>
				<td><label for="delete_task" title="{{ $ruleComments['delete_task'] }}">Delete task</label></td>
				<td>
					<div class="form-check form-check-inline">
  					<input class="form-check-input" type="radio" name="delete_task" id="delete_task" value="1" {{ $ruleInfo->delete_task ? 'checked="checked"' : "" }}>
  					<label class="form-check-label" for="delete_task">Yes</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="delete_task" id="delete_task" value="0" {{ $ruleInfo->delete_task ? "" : 'checked="checked"' }}>
					  <label class="form-check-label" for="delete_task">No</label>
					</div>
				</td>
			</tr>
			<tr>
				<td><label for="condition_event" title="{{ $ruleComments['condition_event'] }}">Condition event</label></td>
				<td class="ui-front"><input class="form-control noformat" name="condition_event" value="{{ empty($ruleInfo->condition_eventInfo) ? '' : $ruleInfo->condition_eventInfo->name }}"></td>
				<td><label for="use_priority" title="{{ $ruleComments['use_priority'] }}">Use priority</label></td>
				<td>
					<div class="form-check form-check-inline">
  					<input class="form-check-input" type="radio" name="use_priority" id="use_priority" value="1" {{ $ruleInfo->use_priority ? 'checked="checked"' : "" }}>
  					<label class="form-check-label" for="use_priority">Yes</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="use_priority" id="use_priority" value="0" {{ $ruleInfo->use_priority ? "" : 'checked="checked"' }}>
					  <label class="form-check-label" for="use_priority">No</label>
					</div>
				</td>
			</tr>
			<tr>
				<td><label for="abort_on" title="{{ $ruleComments['abort_on'] }}">Abort on</label></td>
				<td class="ui-front"><input class="form-control noformat" name="abort_on" value="{{ empty($ruleInfo->abort_onInfo) ? '' : $ruleInfo->abort_onInfo->name }}"></td>
				<td><label for="responsible" title="{{ $ruleComments['responsible'] }}">Responsible</label></td>
				<td class="ui-front"><input class="form-control noformat" name="responsible" value="{{ empty($ruleInfo->responsibleInfo) ? '' : $ruleInfo->responsibleInfo->name }}"></td>
			</tr>
			<tr>
				<td><label for="days" title="{{ $ruleComments['days'] }}">Days</label></td>
				<td><input class="form-control noformat editable" name="days" value="{{ $ruleInfo->days }}"></td>
				<td><label for="cost" title="{{ $ruleComments['cost'] }}">Cost</label></td>
				<td><input class="form-control noformat editable" name="cost" value="{{ $ruleInfo->cost }}" /></td>
			</tr>
			<tr>
				<td><label for="months" title="{{ $ruleComments['months'] }}">Months</label></td>
				<td><input class="editable form-control noformat" name="months" value="{{ $ruleInfo->months }}"></td>
				<td><label for="fee" title="{{ $ruleComments['fee'] }}">Fee</label></td>
				<td><input class="editable form-control noformat" name="fee" value="{{ $ruleInfo->fee }}"></td>
			</tr>
			<tr>
				<td><label for="years" title="{{ $ruleComments['years'] }}">Years</label></td>
				<td><input class="form-control noformat editable" name="years" value="{{ $ruleInfo->years }}"></td>
				<td><label for="currency" title="{{ $ruleComments['currency'] }}">Currency</label></td>
				<td><input type="text" maxlength="3" class="form-control editable noformat" name="currency" value="{{ $ruleInfo->currency }}"></td>
			</tr>
			<tr>
				<td><label for="end_of_month" title="{{ $ruleComments['end_of_month'] }}">End of month</label></td>
				<td>
					<div class="form-check form-check-inline">
  					<input class="form-check-input" type="radio" name="end_of_month" id="end_of_month" value="1" {{ $ruleInfo->end_of_month ? 'checked="checked"' : "" }}>
  					<label class="form-check-label" for="end_of_month">Yes</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="end_of_month" id="end_of_month" value="0" {{ $ruleInfo->end_of_month ? "" : 'checked="checked"' }}>
					  <label class="form-check-label" for="end_of_month">No</label>
					</div>
				</td>
			</tr>
		</table>
		<button type="button" class="btn btn-danger" title="Delete rule" id="delete-rule" data-dismiss="modal" data-id="{{ $ruleInfo->id }}">Delete</button>
	</fieldset>

</div>
