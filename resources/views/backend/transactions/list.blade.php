@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-lg-12">
		<div class="card no-export">
		    <div class="card-header d-flex align-items-center">
				<span class="panel-title">{{ _lang('All Transactions') }}</span>
				<select name="status" class="ml-auto select-filter filter-select">
					<option value="">{{ _lang('All') }}</option>
					<option value="1">{{ _lang('Pending') }}</option>
					<option value="2">{{ _lang('Approved') }}</option>
					<option value="0">{{ _lang('Rejected') }}</option>
				</select>
			</div>
			<div class="card-body">
				<table id="transactions_table" class="table table-bordered">
					<thead>
					    <tr>
							<th>{{ _lang('Date') }}</th>
						    <th>{{ _lang('User') }}</th>
						    <th>{{ _lang('AC Number') }}</th>
							<th>{{ _lang('Currency') }}</th>
							<th>{{ _lang('DR/CR') }}</th>
							<th>{{ _lang('Type') }}</th>
							<th>{{ _lang('Method') }}</th>
							<th>{{ _lang('Amount') }}</th>
							<th>{{ _lang('Status') }}</th>
							<th class="text-center">{{ _lang('Action') }}</th>
					    </tr>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection

@section('js-script')
<script src="{{ asset('/backend/assets/js/datatables/all_transactions.js?v=1.0') }}"></script>
@endsection