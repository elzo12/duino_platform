@extends('layouts.app', ['activePage' => 'role', 'activeButton' => 'EnergyManagement', 'title' => 'ENERGYNO : Plataforma IoT ECOSUR', 'navName' => 'Roles'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card data-tables">

                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">{{ __('Roles') }}</h3>
                                    <p class="text-sm mb-0">
                                        {{ __('Management') }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-2">
                            @include('alerts.success')
                            @include('alerts.errors')
                        </div>

                        <div class="table-responsive py-4" id="roles-table">
                            <table id="datatables" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>{{ __('Name') }}</th>
                                        <th>{{ __('Description') }}</th>
                                        @can('manage-users', App\Models\User::class)
                                            <th class="disabled-sorting text-right">{{ __('Actions') }}</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>{{ __('Name') }}</th>
                                        <th>{{ __('Description') }}</th>
                                        @can('manage-users', App\Models\User::class)
                                            <th class="text-right">{{ __('Actions') }}</th>
                                        @endcan
                                    </tr>
                                </tfoot>
                                <tbody>

                                    @foreach ($roles as $role)
                                        <tr>
                                            <td>{{ $role->name }}</td>
                                            <td>{{ $role->description }}</td>
                                            @can('manage-users', App\Models\User::class)
                                                <td class="text-right">
                                                    @if (auth()->user()->can('update', $role) || auth()->user()->can('delete', $role))
                                                        @can('update', $role)
                                                            <a href="{{ route('role.edit', $role->id) }}" class="btn btn-link btn-warning edit d-inline-block"><i class="fa fa-edit"></i></a>
                                                        @endcan
                                                        @if ($role->users->isEmpty() && auth()->user()->can('delete', $role))
                                                            <form class="d-inline-block" action="{{ route('role.destroy', $role->id) }}" method="POST">
                                                                @method('delete')
                                                                @csrf
                                                                <a class="btn btn-link btn-danger " onclick="confirm('{{ __('Are you sure you want to delete this role?') }}') ? this.parentElement.submit() : ''"s><i class="fa fa-times"></i></a>
                                                            </form>
                                                        @endif
                                                    @endif
                                                </td>
                                            @endcan
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatables').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                responsive: true,
                language: {
                    url: "https://cdn.datatables.net/plug-ins/1.12.1/i18n/es-MX.json"
                }

            });


            var table = $('#datatables').DataTable();

            // Delete a record
            table.on('click', '.remove', function(e) {
                $tr = $(this).closest('tr');
                table.row($tr).remove().draw();
                e.preventDefault();
            });

            //Like record
            table.on('click', '.like', function() {
                alert('You clicked on Like button');
            });
        });
    </script>
@endpush
