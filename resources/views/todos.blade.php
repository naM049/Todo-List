@extends('layouts.app')
@section('content')

    <div class="row mt-4 mx-4 justify-content-center mt-5">
        <div class="col-md-8 ">
            <div class="card bg mb-4 shadow border-0">
                <div class="card-header pb-0 border-bottom-0 bg-transparent text-center">
                    <h1 class="d-inline-block">TODO LIST</h1>
                    <x-add-button/>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <x-table>
                        <x-slot:header>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 px-4">
                                    Title
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Create Date
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Status
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Action
                                </th>
                            </tr>
                        </x-slot:header>

                        @foreach($todos as $todo)
                            <tr>
                                <td>
                                    <div class="d-flex px-3 py-1">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h5 class="mb-0 text-sm">{{ $todo->title }}</h5>
                                        </div>
                                    </div>
                                </td>

                                <td class="align-middle text-center text-sm">
                                    <p class="text-sm font-weight-bold mb-0">
                                        <time>{{  date('d/m/Y', strtotime($todo->created_at)) }}</time>
                                    </p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                <span
                                    class="badge px-3 py-2 rounded-pill {{ $todo->completed ?'bg-success':'bg-warning' }}">{{ $todo->completed ? 'Completed':'Pending' }}</span>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="d-flex px-3 py-1 justify-content-center">
                                        <x-edit-button :todo="$todo"/>
                                        <x-delete-button :id="$todo->id"/>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </x-table>
                </div>
            </div>
        </div>
    </div>

@endsection
